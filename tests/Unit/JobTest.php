<?php
use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {

    //we create the employer
    $employer = Employer::factory()->create();

    //we create a job
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {

    //we need to create a job first
    $job = Job::factory()->create();

    $job->tag('frontend');

    //result
    expect($job->tags)->toHaveCount(1);
});
