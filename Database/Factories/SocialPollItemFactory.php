<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialPollItem\SocialPollItemEntityModel;
use Modules\Social\Models\SocialPollItemModel;

/**
 * @method SocialPollItemModel create(array $attributes = [])
 * @method SocialPollItemModel make(array $attributes = [])
 */
class SocialPollItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPollItemModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPollItemEntityModel::props(null, true);
        return [
            $p->poll_id => null,
            $p->name => $this->faker->words(3, true),
        ];
    }
}
