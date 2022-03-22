<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Events\Reorder;
use App\Models\Student;

class reorderStudent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:reorder-student {school} {student_order} {--queue=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reorder Student After Delete One';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return $this->argument('school');
        $start_from = Student::where('school_id',$this->argument('school'))->where('order','<',$this->argument('student_order'))->count();
        $reorder_students = Student::where('school_id',$this->argument('school'))->where('order','>',$this->argument('student_order'))->get();

        foreach ($reorder_students as $key => $student) {
          Student::find($student->id)->update(['order'=>(++$start_from)]);
        }
        event(new Reorder(auth()->user()));
        //$this->info('The command was successful!');
    }
}
