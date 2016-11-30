<?php
use Migrations\AbstractMigration;

class CreateLevelsTeams extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('levels_teams');
        // Foreign Keys
        $table->addColumn('team_id', 'integer', array('signed'=> 'disable'))
        ->addForeignKey('team_id','teams','id',array('delete'=>'CASCADE', 'update'=>'NO_ACTION'))
        ->addColumn('level_id', 'integer', array('signed'=> 'disable'))
        ->addForeignKey('level_id','levels','id',array('delete'=>'CASCADE', 'update'=>'NO_ACTION'))
        ->addColumn('status','enum', array('values'=>'completed, uncompleted'))
        ->addColumn('movements','integer')
        ->create();
    }
}
