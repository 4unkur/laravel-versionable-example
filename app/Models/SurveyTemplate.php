<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelVersionable\VersionStrategy;
use Overtrue\LaravelVersionable\Versionable;


class SurveyTemplate extends Model
{
    use HasFactory;
    use Versionable;

    protected $guarded = [];

    protected array $versionable = ['revision', 'file_type'];

    protected string $versionStrategy = VersionStrategy::SNAPSHOT;
}
