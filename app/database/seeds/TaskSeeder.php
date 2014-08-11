<?php
class TaskSeeder extends Seeder {

    public function run()
    {
        DB::table('tasks')->delete();
        // TASK TYPE : 0 = ADHOC, 1 = REVIEW TASK

        // WORKFLOW 1 | SECTION 1 <-- BELOW 50,000
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '1';
        $task->taskName = 'PPMP CERTIFICATION';
        $task->taskType = 'certification';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '1';
        $task->taskName = 'GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '1';
        $task->taskName = 'BUDGET / ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '1';
        $task->taskName = 'PA';
        $task->taskType = 'normal';;
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '1';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();



        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '1';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();


        // WORKFLOW 1 | SECTION 2
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '2';
        $task->taskName = '3 RFQ/CANVASS';
        $task->taskType = 'normal';
        $task->maxDuration = '1';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '2';
        $task->taskName = 'ABSTRACT OF QUOTATION';
        $task->taskType = 'normal';
        $task->maxDuration = '6';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        

        // WORKFLOW 1 | SECTION 3
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'LCRB / HRB / SUPPLIER';
        $task->taskType = 'supplier';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'PA';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'BAC (DELIVERY)';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '3';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        // WORKFLOW 1 | SECTION 4
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'CHEQUE';
        $task->taskType = 'cheque';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'BUDGET';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'TREASURY';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'PA';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '1';
        $task->section_id = '4';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
        //WORKFLOW 2 | SECTION 1 <-- ABOVE 50,000 BELOW 500,000
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '1';
        $task->taskName = 'PPMP CERTIFICATION';
        $task->taskType = 'certification';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '1';
        $task->taskName = 'GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '1';
        $task->taskName = 'BUDGET / ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '1';
        $task->taskName = 'PA';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '1';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

 

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '1';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        //WORKFLOW 2 | SECTION 2 ====================================================================================================================================================
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '2';
        $task->taskName = 'PGEPS POSTING';
        $task->taskType = 'posting';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '2';
        $task->taskName = '3 RFQ/CANVASS';
        $task->taskType = 'normal';
        $task->maxDuration = '1';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '2';
        $task->taskName = 'ABSTRACT OF QUOTATION';
        $task->taskType = 'normal';
        $task->maxDuration = '6';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '2';
        $task->taskName = 'BAC RESOLUTION';
        $task->taskType = 'normal';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '2';
        $task->taskName = 'NOTICE OF AWARD';
        $task->taskType = 'normal';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

    
        //WORKFLOW 2 | SECTION 3
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'LCRB / HRB / SUPPLIER';
        $task->taskType = 'supplier';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'PA';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'BAC (DELIVERY)';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '3';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
        //WORKFLOW 2 | SECTION 4
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'CHEQUE';
        $task->taskType = 'cheque';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'BUDGET';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'TREASURY';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'PA';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '2';
        $task->section_id = '4';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
        //WORKFLOW 3 | SECTION 1 <-- ABOVE 500,000
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '1';
        $task->taskName = 'GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '1';
        $task->taskName = 'BUDGET / ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '1';
        $task->taskName = 'P.A. OFFICE';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '1';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '1';
        $task->taskName = 'GSD RELEASE';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '1';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        //WORKFLOW 3 | SECTION 2
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'PRE-PROCUREMENT CONFERENCE';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'PHILGEPS DATE PUBLISHED';
        $task->taskType = 'published';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'ADVERTISEMENT';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'PRE-BID CONFERENCE';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'ITB DATE PUBLISHED';
        $task->taskType = 'published';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'ELIGIBILITY DOCUMENTS';
        $task->taskType = 'documents';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

       	$task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'TWG EVALUATION DATE';
        $task->taskType = 'evaluation';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'AOB DATE (AFTER TWG EVALUATION)';
        $task->taskType = 'evaluation';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'BAC RESO DATE (SIGNED BY ALL BAC MEMBERS)';
        $task->taskType = 'evaluation';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'NOTICE OF AWARD DATE';
        $task->taskType = 'contract';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'NOTICE TO PROCEED';
        $task->taskType = 'meeting';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
    	
    	$task = new Task;
        $task->wf_id = '3';
        $task->section_id = '2';
        $task->taskName = 'PHILGEPS AWARD PUBLISHED';
        $task->taskType = 'published';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();


        //WORKFLOW 3 | SECTION 3
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'LCRB / HRB / SUPPLIER';
        $task->taskType = 'supplier';
        $task->maxDuration = '0';
        $task->order_id = '1';
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'P.A.';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'BAC (DELIVERY)';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '3';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        //WORKFLOW 3 | SECTION 4
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'BUDGET';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'TREASURY';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'P.A.';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'CHECK RELEASED';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '3';
        $task->section_id = '4';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        // WORKFLOW 4 | SECTION 1
        $orderID = 1; // controller for order_id

        // $task = new Task;
        // $task->wf_id = '4';
        // $task->section_id = '1';
        // $task->taskName = 'DATE OF P.R.';
        // $task->taskType = 'normal';
        // $task->maxDuration = '0';
        // $task->order_id = $orderID++;
        // $task->description = 'This is a task description';
        // $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '1';
        $task->taskName = 'RECEIVED GSD';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
        
        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '1';
        $task->taskName = 'BUDGET / ACTG';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '1';
        $task->taskName = 'P.A. OFFICE';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
    
        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '1';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '1';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        // WORKFLOW 4 | SECTION 2
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '2';
        $task->taskName = 'LABOR PROPOSAL DATE';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '2';
        $task->taskName = 'NOTICE OF AWARD DATE';
        $task->taskType = 'conference';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '2';
        $task->taskName = 'NOTICE TO PROCEED DATE';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '2';
        $task->taskName = 'PAKYAW CONTRACT DATE';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '2';
        $task->taskName = 'ACCOMPLISHMENT REPORT DATE';
        $task->taskType = 'conference';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();



        // WORKFLOW 4 | SECTION 3
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'BUDGET';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'TREASURY';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'P.A. OFFICE';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'PGO';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'CHECK RELEASED';
        $task->taskType = 'normal';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '4';
        $task->section_id = '3';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
        // WORKFLOW 5 | SECTION 1
        $orderID = 1; // controller for order_id

        // $task = new Task;
        // $task->wf_id = '5';
        // $task->section_id = '1';
        // $task->taskName = 'DATE OF P.R.';
        // $task->taskType = 'datebyremark';
        // $task->maxDuration = '0';
        // $task->order_id = $orderID++;
        // $task->description = 'This is a task description';
        // $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '1';
        $task->taskName = 'RECEIVED GSD';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '1';
        $task->taskName = 'BUDGET / ACTG';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '1';
        $task->taskName = 'P.A. OFFICE';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '1';
        $task->taskName = 'PGO';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '1';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
        // WORKFLOW 5 | SECTION 2
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '2';
        $task->taskName = 'PHILGEPS DATE PUBLISHED';
        $task->taskType = 'published';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '2';
        $task->taskName = 'RFQ NO. OF SUPPLIERS';
        $task->taskType = 'rfq';
        $task->maxDuration = '1';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '2';
        $task->taskName = 'CERTIFICATION OF EMERGENCY';
        $task->taskType = 'dateby';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '2';
        $task->taskName = 'CERTIFICATE OF EXCLUSIVE DISTRIBUTOR, MANUFACTURER';
        $task->taskType = 'dateby';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '2';
        $task->taskName = 'BAC RESO DATE (SIGNED BY ALL BAC MEMBERS)';
        $task->taskType = 'evaluation';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '2';
        $task->taskName = 'NOTICE OF AWARD DATE (PGO)';
        $task->taskType = 'evaluation';
        $task->maxDuration = '3';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();


        // WORKFLOW 5 | SECTION 3
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '3';
        $task->taskName = 'RECEIVED GSD';
        $task->taskType = 'dateby';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '3';
        $task->taskName = 'ACCOUNTING OFFICE';
        $task->taskType = 'dateby';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '3';
        $task->taskName = 'P.A. OFFICE';
        $task->taskType = 'dateby';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
    
        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '3';
        $task->taskName = 'GOVERNORS OFFICE';
        $task->taskType = 'dateby';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '3';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
    
        // WORKFLOW 5 | SECTION 4
        $orderID = 1; // controller for order_id

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'BUDGET';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();
    
        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'TREASURY';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'P.A. OFFICE';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'PGO';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'ACCOUNTING';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'CHECK RELEASED';
        $task->taskType = 'datebyremark';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        $task = new Task;
        $task->wf_id = '5';
        $task->section_id = '4';
        $task->taskName = 'Date Signed by Gov:';
        $task->taskType = 'dateonly';
        $task->maxDuration = '0';
        $task->order_id = $orderID++;
        $task->description = 'This is a task description';
        $task->save();

        OtherDetails::create([
            'id'        => '1',
            'label'    => 'No. of Days Allowed',
            'section_id' => '17',
        ]);
        OtherDetails::create([
            'id'        => '2',
            'label'    => 'Total Days for BAC Documents Preparation',
            'section_id' => '17',
        ]);
        OtherDetails::create([
            'id'        => '3',
            'label'    => 'Compliance',
            'section_id' => '17',
        ]);
        OtherDetails::create([
            'id'        => '4',
            'label'    => 'Amount',
            'section_id' => '18',
        ]);

    }

}