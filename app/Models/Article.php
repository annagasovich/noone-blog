<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Redis;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $image
 * @property string $content
 * @property int $views
 * @property int $likes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $content_preview
 * @property-read mixed $full_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereViews($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HasFactory;

    /**
     * Get tags of article
     *
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get preview
     *
     * @return bool|string
     */
    public function getContentPreviewAttribute()
    {
        return substr($this->content, 0, 100);
    }

    /**
     * Get full article url
     *
     * @return string
     */
    public function getFullUrlAttribute()
    {
        return '/articles/' . $this->url;
    }

    /**
     * Get redis key
     *
     * @return string
     */
    public function getRedisKeyAttribute()
    {
        return 'article:' . $this->id . ':view';
    }

    /**
     * Get views from redis or from database if not cached
     *
     * @return int
     */
    public function getCachedViewsAttribute()
    {
        $cachedViews = Redis::get($this->redis_key);
        return $cachedViews ?? $this->views;
    }

    /**
     * Increment view in cache
     *
     * @return mixed
     */
    public function view()
    {
        $cachedViews = Redis::get($this->redis_key);

        if (!isset($cachedViews)) {
            Redis::set($this->redis_key, $this->views);
        }

        $views = Redis::incr($this->redis_key);

        return $views;
    }
}
