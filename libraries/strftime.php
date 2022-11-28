<?php

function polyfill_strftime($format, $timestamp = null, $locale = null)
{
    if (! ($timestamp instanceof \DateTimeInterface)) {
        $timestamp = is_int($timestamp) ? "@" . $timestamp : (string) $timestamp;

        try {
            $timestamp = new \DateTime($timestamp);
        } catch (\Exception $e) {
            throw new \InvalidArgumentException(
                '$timestamp argument is neither a valid UNIX timestamp, a valid date-time string or a DateTime object.',
                0,
                $e
            );
        }
    }

    $timestamp->setTimezone(new \DateTimeZone(date_default_timezone_get()));
    $locale = preg_replace('/[^\w-].*$/', "", empty($locale) ? setlocale(LC_TIME, "0") : $locale);
    $intl_formats = ["%a" => "EEE", "%A" => "EEEE", "%b" => "MMM", "%B" => "MMMM", "%h" => "MMM"];
    $intl_formatter = function (\DateTimeInterface $timestamp, $format) use ($intl_formats, $locale) {
        $tz = $timestamp->getTimezone();
        $date_type = \IntlDateFormatter::FULL;
        $time_type = \IntlDateFormatter::FULL;
        $pattern = "";

        switch ($format) {
            case "%c":
                $date_type = \IntlDateFormatter::LONG;
                $time_type = \IntlDateFormatter::SHORT;
                break;

            case "%x":
                $date_type = \IntlDateFormatter::SHORT;
                $time_type = \IntlDateFormatter::NONE;
                break;

            case "%X":
                $date_type = \IntlDateFormatter::NONE;
                $time_type = \IntlDateFormatter::MEDIUM;
                break;

            default:
                $pattern = $intl_formats[$format];
        }

        $calendar = \IntlGregorianCalendar::createInstance();
        $calendar->setGregorianChange(~PHP_INT_MAX);

        return (new \IntlDateFormatter($locale, $date_type, $time_type, $tz, $calendar, $pattern))
            ->format($timestamp);
    };


    $translations = [
        "%a" => $intl_formatter,
        "%A" => $intl_formatter,
        "%d" => "d",
        "%e" => function ($timestamp) {
            return sprintf("% 2u", $timestamp->format("j"));
        },
        "%j" => function ($timestamp) {
            return sprintf("%03d", $timestamp->format("z") + 1);
        },
        "%u" => "N",
        "%w" => "w",
        "%U" => function ($timestamp) {
            $day = new \DateTime(sprintf("%d-01 Sunday", $timestamp->format("Y")));
            return sprintf("%02u", 1 + ($timestamp->format("z") - $day->format("z")) / 7);
        },
        "%V" => "W",
        "%W" => function ($timestamp) {
            $day = new \DateTime(sprintf("%d-01 Monday", $timestamp->format("Y")));
            return sprintf("%02u", 1 + ($timestamp->format("z") - $day->format("z")) / 7);
        },
        "%b" => $intl_formatter,
        "%B" => $intl_formatter,
        "%h" => $intl_formatter,
        "%m" => "m",
        "%C" => function ($timestamp) {
            return floor($timestamp->format("Y") / 100);
        },
        "%g" => function ($timestamp) {
            return substr($timestamp->format("o"), -2);
        },
        "%G" => "o",
        "%y" => "y",
        "%Y" => "Y",
        "%H" => "H",
        "%k" => function ($timestamp) {
            return sprintf("% 2u", $timestamp->format("G"));
        },
        "%I" => "h",
        "%l" => function ($timestamp) {
            return sprintf("% 2u", $timestamp->format("g"));
        },
        "%M" => "i",
        "%p" => "A",
        "%P" => "a",
        "%r" => "h:i:s A",
        "%R" => "H:i",
        "%S" => "s",
        "%T" => "H:i:s",
        "%X" => $intl_formatter,
        "%z" => "O",
        "%Z" => "T",
        "%c" => $intl_formatter,
        "%D" => "m/d/Y",
        "%F" => "Y-m-d",
        "%s" => "U",
        "%x" => $intl_formatter,
    ];

    $out = preg_replace_callback(
        "/(?<!%)%([_#-]?)([a-zA-Z])/",
        function ($match) use ($translations, $timestamp) {
        $prefix = $match[1];
        $char = $match[2];
        $pattern = "%" . $char;
        if ($pattern == "%n") {
            return "\n";
        } elseif ($pattern == "%t") {
            return "\t";
        }

        if (!isset($translations[$pattern])) {
            throw new \InvalidArgumentException(sprintf('Format "%s" is unknown in time format', $pattern));
        }

        $replace = $translations[$pattern];

        if (is_string($replace)) {
            $result = $timestamp->format($replace);
        } else {
            $result = $replace($timestamp, $pattern);
        }

        switch ($prefix) {
                case "_": return preg_replace("/\G0(?=.)/", " ", $result);
                case "#":
                case "-": return preg_replace("/^0+(?=.)/", "", $result);
            }

        return $result;
    },
        $format
    );

    $out = str_replace("%%", "%", $out);
    return $out;
}
