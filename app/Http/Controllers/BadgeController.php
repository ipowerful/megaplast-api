<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Http\Requests\BadgeRequest;
use App\Http\Resources\BadgeResource;
use App\Http\Resources\BadgeUserResource;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

class BadgeController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $badges = Badge::all();
        return $this->sendResponse($badges, 'Badges retrieved successfully.');
    }

    public function userIndex()
    {
        $badges = Badge::with('color')
            ->join('badge_product', 'badges.id', '=', 'badge_product.badge_id')
            ->distinct()
            ->get();

        $badgesResource = BadgeUserResource::collection($badges);
        return $this->sendResponse($badgesResource, 'Badges retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BadgeRequest $request)
    {
        $badge = Badge::create($request->validated());
        return $this->sendResponse($badge, 'Бэдж успешно добавлен', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Badge $badge)
    {
        return $this->sendResponse($badge, 'Badge retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BadgeRequest $request, Badge $badge)
    {
        $badge->update($request->validated());
        return $this->sendResponse($badge, 'Бэдж успешно изменен', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Badge $badge)
    {
        $badge->delete();
        return $this->sendResponse([], 'Бэдж успешно удален');
    }
}
