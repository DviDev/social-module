<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Entities\SocialGroup\SocialGroupVisibilityEnum;
use Modules\Social\Models\SocialGroupModel;

/**
 * @method SocialGroupModel create(array $attributes = [])
 * @method SocialGroupModel make(array $attributes = [])
 */
class SocialGroupFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialGroupModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialGroupEntityModel::props(null, true);
        return [
            $p->workspace_id => null,
            $p->user_id => null,
            $p->visibility => collect(SocialGroupVisibilityEnum::toArray())->random(),
            $p->name => $this->faker->words(3, true),
            $p->cover_image_path => null,
        ];
    }
}
