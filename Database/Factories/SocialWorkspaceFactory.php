<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceVisibilityEnum;
use Modules\Social\Models\SocialWorkspaceModel;

/**
 * @method SocialWorkspaceModel create(array $attributes = [])
 * @method SocialWorkspaceModel make(array $attributes = [])
 */
class SocialWorkspaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialWorkspaceModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialWorkspaceEntityModel::props(null, true);
        return [
            $p->workspace_id => null,
            $p->visibility => collect(SocialWorkspaceVisibilityEnum::toArray())->random(),
            $p->owner_user_id => null,
        ];
    }
}
