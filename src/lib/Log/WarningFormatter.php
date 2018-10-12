<?php

namespace Bot\Framework\lib\Log;

use Monolog\Formatter;
use Monolog\Logger;
use Monolog\Formatter\NormalizerFormatter;

class WarningFormatter extends NormalizerFormatter {

    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
        $vars = parent::format($record);
        if ($vars['level'] === Logger::ERROR) {
            $output = '[ERROR] ';
        } else if ($vars['level'] === Logger::WARNING) {
            $output = '[WARNING] ';
        }

        if (isset($vars['datetime'])) {
            $output .= '[' . $vars['datetime'] . '] ';
        }
        $output .= '[' . MLogger::$logId . '] ';

        $extra = $vars['extra'];
        $output .= '[' . $extra['file'] . ':' . $extra['line'] . '] ';

        if (isset($vars['message'])) {
            $output .= '[' . $vars['message'] . '] ';
        }

        return $output . "\n";
    }

    /**
     * {@inheritdoc}
     */
    public function formatBatch(array $records)
    {
        $message = '';
        foreach ($records as $record) {
            $message .= $this->format($record);
        }

        return $message;
    }

}
