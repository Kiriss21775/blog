<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Category;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(User $user)
    {

        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
