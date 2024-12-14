<?php

// test('example', function () {
//     expect(true)->toBeTrue();
// });

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;


it('belongs to an employer', function () {

$user= User::factory()->create();
$employer = Employer::factory()->create([
    'user_id'=> $user->id,
]);
$job = Job::factory()->create([
    'employer_id'=> $employer->id,
]);

expect($job->employer->is($employer))->tobeTrue();
});
