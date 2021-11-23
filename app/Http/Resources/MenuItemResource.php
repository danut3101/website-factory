<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;

class MenuItemResource extends Resource
{
    protected function default(Request $request): array
    {
        $this->withoutPermissions();

        return [
            'id'           => $this->id,
            'type'         => $this->type,
            'label'        => $this->getTranslations('label'),
            'external_url' => $this->getTranslations('external_url'),
            'new_tab'      => $this->new_tab,
            'model'        => $this->model_id,
            'children'     => self::collection($this->children),
        ];
    }
}
