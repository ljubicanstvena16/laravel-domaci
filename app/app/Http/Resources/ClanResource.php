<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @param  \Illuminate\Http\Request  $request

     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'Ime' => $this->resource->Ime,
            'Prezime' => $this->resource->Prezime,
            'ClanskaKarta' => $this->resource->ClanskaKarta,
            'DatumIsteka' => $this->resource->DatumIsteka,
        ];
    }
}