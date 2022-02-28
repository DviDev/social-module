<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostDownVoteEntityModel;
use Modules\Social\Models\SocialPostDownVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostDownVoteModel model()
 * @method SocialPostDownVoteEntityModel find($id)
 * @method SocialPostDownVoteModel first()
 * @method SocialPostDownVoteModel findOrNew($id)
 * @method SocialPostDownVoteModel firstOrNew($query)
 * @method SocialPostDownVoteEntityModel findOrFail($id)
 */
class SocialPostDownVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostDownVoteModel::class;
    }
}
