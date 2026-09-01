<?php

declare(strict_types=1);

namespace Liberu\CRM\Personalization\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $holdout_percent
 * @property array<string, mixed> $variants
 */
final class PersonalizationRule extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_personalization_rules';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['conditions' => 'array', 'variants' => 'array', 'fallback' => 'array', 'holdout_percent' => 'integer'];
    }
}
