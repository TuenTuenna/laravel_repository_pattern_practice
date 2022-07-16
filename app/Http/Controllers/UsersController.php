<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepositoryInterface;

// 사용자 컨트롤러
class UsersController extends Controller
{
    // 유저 리포지토리
    private $userRepository;

    // 생성자
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // route
    public function __invoke()
    {

        // 맴버변수인 user리포지토리로 모든 사용자들 가져오기
        $users = $this->userRepository->all();

        // return view('users.index', [
        //     'users' => $users
        // ]);

        return response()->json([
            'users' => $users
        ], 201);
    }
}
