<?php

namespace Bot\Framework\lib\Log;

use Monolog\Logger;
use Bot\Framework\lib\Log\MLogger;
use Monolog\Formatter;
use Monolog\Formatter\NormalizerFormatter;

class NoticeFormatter extends NormalizerFormatter {

    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
        $vars = parent::format($record);
        if ($vars['level'] === Logger::DEBUG) {
            $output = '[DEBUG] ';
        } else if ($vars['level'] === Logger::NOTICE) {
            $output = '[NOTICE] ';
        }

        if (isset($vars['datetime'])) {
            $output .= '[' . $vars['datetime'] . '] ';
        }
        $output .= '[' . MLogger::$logId . '] ';

        if ($vars['level'] === Logger::DEBUG) {
            $output .= $vars['message'];
            return $output . "\n";
        }

        foreach ($vars['context'] as $var => $val) {
            $output .= $var . ':' . $val . ' ';
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
