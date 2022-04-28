<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();
        $event = new Event();
        $event->event_title = ['en'=>'شركة مورا سوفت','ar'=>'حدث هام'];
        $event->image = 'img_1.png';
        $event->desc = 'شحن السيارات براً من مصر للسعودية: حيث تقدم هذه الشركات هذه الخدمة بكفاءة و فاعلية و يكون هناك ثمة تأمين من قبل الشركة الى صاحب الخدمة الذي سوف يقوم بإستقبال هذه السيارة، وفي حالة أي أعطال أو ظروف خارجة عن الإرادة شركة الشحن يكون هناك ثمة تعويض مادي تعويضي لهذا الصدد شحن لمصر من الباب للباب

        ';
        $event->limit = 'شركة شحن برى من مصر الى السعودية والامارات والكويت';
        $event->status = 1;
        $event->save();
        $event = new Event();
        $event->event_title = ['en'=>'شركة مورا سوفت للشحن','ar'=>'جدا حدث هام'];
        $event->image = 'img_2.png';
        $event->desc = '  شحن السيارات براً من مصر للسعودية: حيث تقدم هذه الشركات هذه الخدمة بكفاءة و فاعلية و يكون هناك ثمة تأمين من قبل الشركة الى صاحب الخدمة الذي سوف يقوم بإستقبال هذه السيارة، وفي حالة أي أعطال أو ظروف خارجة عن الإرادة شركة الشحن يكون هناك ثمة تعويض مادي تعويضي لهذا الصدد شحن لمصر من الباب للباب

        ';
        $event->limit = '   شحن البضائع من مصر الى المريخ – مورا سوفت ';
        $event->status = 1;
        $event->save();
        $event = new Event();
        $event->event_title = ['en'=>'   MoraSoft made important Event ','ar'=>'جدا حدث هام'];
        $event->image = 'img_3.png';
        $event->desc = '  شحن السيارات براً من مصر للسعودية: حيث تقدم هذه الشركات هذه الخدمة بكفاءة و فاعلية و يكون هناك ثمة تأمين من قبل الشركة الى صاحب الخدمة الذي سوف يقوم بإستقبال هذه السيارة، وفي حالة أي أعطال أو ظروف خارجة عن الإرادة شركة الشحن يكون هناك ثمة تعويض مادي تعويضي لهذا الصدد شحن لمصر من الباب للباب';
        $event->limit = 'يوجد لدينا احداث متعدده';
        $event->status = 1;
        $event->save();

    }
}
