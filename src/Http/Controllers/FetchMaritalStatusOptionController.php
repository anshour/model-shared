<?php

declare(strict_types=1);

namespace Inisiatif\ModelShared\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Inisiatif\ModelShared\Repositories\MaritalStatusRepository;

final class FetchMaritalStatusOptionController
{
    public function __invoke(Request $request, MaritalStatusRepository $repository): JsonResource
    {
        return JsonResource::collection(
            $repository->fetchForOptions($request)
        );
    }
}
