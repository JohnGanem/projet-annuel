<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class BaseModel extends Model
{

    /**
     * BaseModel constructor.
     *
     * @param array<mixed> $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setIncrementing(false);
        $this->setKeyType('string');
    }

    public static function generateId(): string
    {
        try {
            return Uuid::uuid4()->toString();
        } catch (Exception $e) {
            throw new $e;
        }
    }

    public function getId(): string
    {
        return $this->getAttribute($this->getKeyName());
    }

}
