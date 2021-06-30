<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountBankAccount extends Model
{
    // use HasFactory;

    protected $fillable = [
        'bank_name', 'bank_account_no', 'bank_branch_name', 'bank_account_type', 'bank_starting_balance', 'bank_current_balance', 'bank_cheque_sl_to', 'bank_cheque_sl_from', 'bank_account_purpose'
    ];

    public static $sortable = ['id' => 'bank_id ', 'name' => 'bank_name'];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Accounting\Database\factories\AccountBankAccountFactory::new();
    // }
}




{"ins_name":["test 1","test 2"],"subject":["subject 1","subject 2"],"degree":["degree 1","degree 2"],"passing_year":["2020","2020"],"result":["3.97","4.00"]}