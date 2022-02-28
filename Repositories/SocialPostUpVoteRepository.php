<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostUpVoteEntityModel;
use Modules\Social\Models\PostUpVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method PostUpVoteModel model()
 * @method SocialPostUpVoteEntityModel find($id)
 * @method PostUpVoteModel first()
 * @method PostUpVoteModel findOrNew($id)
 * @method PostUpVoteModel firstOrNew($query)
 * @method SocialPostUpVoteEntityModel findOrFail($id)
 */
class SocialPostUpVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return PostUpVoteModel::class;
    }
}
