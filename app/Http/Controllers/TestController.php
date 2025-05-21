<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
	/**
	 * Test index
	 */
	public function index(): JsonResponse
	{
		return response()->json('test_data');
	}
}
