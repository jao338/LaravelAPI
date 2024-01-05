<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (integer) $this->id,
            'title' => (string) $this->title,
            'description' => (string) $this->description,
            'due_date' => (string) $this->due_date,
            'is_done' => (boolean) $this->is_done,
        ];
    }
}
