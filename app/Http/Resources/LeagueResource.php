<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeagueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            "id" => $this->id,
            "name" => $this->name,
            "participants" => $this->participants,
            "type" => $this->type,
            "duration" => $this->duration,
            "start" => $this->start,
            "end" => $this->end,
            "winner_type" => $this->winner_type,
            "entry_fee" => $this->entry_fee,
            "winning_amount" => $this->winning_amount,
            "status" => $this->status,
            "is_owner" => $this->pivot->is_owner,
        ];
    }
}
