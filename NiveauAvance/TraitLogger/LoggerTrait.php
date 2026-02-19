<?php
namespace App\NiveauAvance\TraitLogger;

trait LoggerTrait {
    private array $logs = [];

    public function log(string $message): void {
        $this->logs[] = $message;
    }

    public function getLogs(): array {
        return $this->logs;
    }
}
