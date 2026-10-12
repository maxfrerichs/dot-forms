<?php

declare(strict_types=1);


namespace WEBcoast\DotForms\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Configuration\Event\AfterTcaCompilationEvent;

#[AsEventListener('webcoast.dot_forms.remove_dot_fields_from_search')]
class RemoveDotFieldsFromSearchListener
{
    public function __invoke(AfterTcaCompilationEvent $event): void
    {
        $tca = $event->getTCA();
        foreach ($tca as $tableName => $tableConfig) {
            foreach (array_keys($tableConfig['columns'] ?? []) as $fieldName) {
                if (str_contains((string)$fieldName, '.')) {
                    $tca[$tableName]['columns'][$fieldName]['config']['searchable'] = false;
                }
            }
        }

        $event->setTCA($tca);
    }
}
