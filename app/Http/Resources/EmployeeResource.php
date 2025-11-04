<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->full_name,
            // 'last_name' => $this->last_name,
            'willing_to_work' => $this->willing_to_work == true ? 'Yes' : 'No',
            'languages_known' => $this->languages_known,
        ];
    }
}
