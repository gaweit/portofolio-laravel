<?php

use Illuminate\Database\Seeder;
use App\Lang;
class LangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lang::create([
            'key'=>'hire_link',
            'en'=>'Hire Me Now',
            'bn'=>'আমাকে ভাড়া করুন',
            'pt'=>'contrate-me',
            'hi'=>'मुझे चुनिएँ',
            'ml'=>'എന്നെ നിയമിക്കൂ',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'i_am',
            'en'=>'I Am',
            'bn'=>'আমি',
            'pt'=>'eu sou',
            'hi'=>'मैं हूँ',
            'ml'=>'ഞാൻ',
            'custom'=>'',
        ]);
        Lang::create([
            'key'=>'about_me',
            'en'=>'ABOUT ME',
            'bn'=>'আমার সম্পর্কে',
            'pt'=>'SOBRE MIM',
            'hi'=>'मेरे बारे में',
            'ml'=>'എന്നെ പറ്റി',
            'custom'=>'',
            ]);
        
        Lang::create([
            'key'=>'skill',
            'en'=>'My Skills.',
            'bn'=>'আমার স্কিল',
            'pt'=>'minhas habilidades',
            'hi'=>'मेरे कौशल',
            'ml'=>'എന്റെ കഴിവുകൾ.',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'experince',
            'en'=>'My Experience',
            'bn'=>'আমার অভিজ্ঞতা',
            'pt'=>'Minha experiência',
            'hi'=>'मेरा अनुभव',
            'ml'=>'എന്റെ അനുഭവം',
            'custom'=>'',
        ]);
        
        Lang::create([
            'key'=>'service',
            'en'=>'My Services',
            'bn'=>'আমার সেবা',
            'pt'=>'Meu serviço',
            'hi'=>'मेरी सेवा',
            'ml'=>'എന്റെ സേവനം',
            'custom'=>'',
        ]);
        
        Lang::create([
            'key'=>'work',
            'en'=>'My Works',
            'bn'=>'আমার কাজ',
            'pt'=>'Meus trabalhos',
            'hi'=>'मेरा काम',
            'ml'=>'എന്റെ കൃതികൾ',
            'custom'=>'',
        ]);
        
        Lang::create([
            'key'=>'contact',
            'en'=>'Contact Me',
            'bn'=>'আমার সাথে যোগাযোগ করুন',
            'pt'=>'Entre em contato comigo',
            'hi'=>'मुझसे संपर्क करें',
            'ml'=>'എന്നെ ബന്ധപ്പെടുക',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'subs_email',
            'en'=>'Get The latest Update by Email',
            'bn'=>'ইমেল দ্বারা সর্বশেষ আপডেট পান',
            'pt'=>'Receba as atualizações mais recentes por email',
            'hi'=>'ईमेल द्वारा नवीनतम अद्यतन प्राप्त करें',
            'ml'=>'ഇമെയിൽ വഴി ഏറ്റവും പുതിയ അപ്‌ഡേറ്റുകൾ നേടുക',
            'custom'=>'',
        ]);

         Lang::create([
            'key'=>'cv',
            'en'=>'Download CV',
            'bn'=>'সিভি ডাউনলোড করুন',
            'pt'=>'Baixar CV',
            'hi'=>'डाउनलोड सीवी',
            'ml'=>'സിവി ഡൗൺലോഡുചെയ്യുക',
            'custom'=>'',
        ]);
        
         Lang::create([
            'key'=>'phone',
            'en'=>'Call Me',
            'bn'=>'আমাদের কল করুন',
            'pt'=>'Ligue-nos',
            'hi'=>'हमें फोन करें',
            'ml'=>'ഞങ്ങളെ വിളിക്കുക',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'email',
            'en'=>'Email Us At',
            'bn'=>'আমাদের ইমেল করুন',
            'pt'=>'Envie-nos um e-mail para',
            'hi'=>'हमें ईमेल करें',
            'ml'=>'ഞങ്ങൾക്ക് ഇമെയിൽ ചെയ്യുക',
            'custom'=>'',
        ]);
        Lang::create([
            'key'=>'office',
            'en'=>'Visit Office',
            'bn'=>'অফিস দেখুন',
            'pt'=>'Visite o escritório',
            'hi'=>'कार्यालय पर जाएँ',
            'ml'=>'ഓഫീസ് സന്ദർശിക്കുക',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'sendmsg',
            'en'=>'Send Message',
            'bn'=>'বার্তা পাঠান',
            'pt'=>'enviar mensagem',
            'hi'=>'मेसेज भेजें',
            'ml'=>'സന്ദേശം അയയ്ക്കുക',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'subscibe',
            'en'=>'Subscibe',
            'bn'=>'সাবস্ক্রাইব',
            'pt'=>'se inscrever',
            'hi'=>'सदस्यता लेने के',
            'ml'=>'സബ്‌സ്‌ക്രൈബുചെയ്യുക',
            'custom'=>'',
        ]);
        

    }
}
