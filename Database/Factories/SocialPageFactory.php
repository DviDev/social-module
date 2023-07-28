<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Entities\SocialPage\SocialPageVisibilityEnum;
use Modules\Social\Models\SocialPageModel;

/**
 * @method SocialPageModel create(array $attributes = [])
 * @method SocialPageModel make(array $attributes = [])
 */
class SocialPageFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPageModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPageEntityModel::props(null, true);
        return [
            $p->workspace_id => null,
            $p->user_id => null,
            $p->visibility => collect(SocialPageVisibilityEnum::toArray())->random(),
            $p->name => $this->faker->words(3, true),
            $p->image_cover_path => null,
        ];
    }
}
