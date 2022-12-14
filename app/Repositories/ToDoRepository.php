<?php

namespace App\Repositories;

use App\Models\ToDo;

class ToDoRepository extends BaseRepository
{
    /**
     * @var string[]
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'description',
        'date',
        'due_date',
        'is_completed',
        'is_active',
        'created_at',
        'updated_at',
        'updated_by',
        'added_by',
    ];

    /**
     * @return string[]
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * @return string
     */
    public function model(): string
    {
        return ToDo::class;
    }

    /**
     * @return string[]
     */
    public function getAvailableRelations(): array
    {
        return ['addedByUser', 'updatedByUser'];
    }
}
