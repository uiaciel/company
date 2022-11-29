<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'mwn.surya@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('5lknoac3'), // password
            'remember_token' => Str::random(10),

        ]);
        // \App\Models\Category::factory(5)->create();
        // \App\Models\Post::factory(20)->create();

        DB::table('categories')->insert([
            'name' => 'Berita',
            'slug' => 'berita',
        ]);

        DB::table('categories')->insert([
                'name' => 'News',
                'slug' => 'News',
        ]);

        DB::table('categories')->insert(
        [
            'name' => 'Subsidiaries',
            'slug' => 'subsidiaries',
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Company Profile',
            'slug' => 'company-profile',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Page',

            'content' => '<p>We have a vision to be a leading domestic coal trading from the first-class producers and ensure long term sufficiency of supply for our various customers, with excellent performance and first-class standards serving both international and domestic coal market. In order to achieve it we have commitment to provide customer satisfaction and strengthen the capital sources by hard work and strong team network.</p>
            <p>&nbsp;</p>
            <h3><strong>Vision</strong></h3>
            <blockquote class="blockquote">
            <p>To be a provider of energy and raw materials both solid energy, liquid and gas integrated, and able to develop new and renewable energy for the welfare of the community</p>
            </blockquote>
            <h3>Mission</h3>
            <blockquote class="blockquote">
            <p>We efficiently provide coal trading products, solutions and services, quality and sustainable, to create added value for our stakeholders.</p>
            </blockquote>',

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Visi Mission',
            'slug' => 'visi-mission',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Page',

            'content' => '<p>We have a vision to be a leading domestic coal trading from the first-class producers and ensure long term sufficiency of supply for our various customers, with excellent performance and first-class standards serving both international and domestic coal market. In order to achieve it we have commitment to provide customer satisfaction and strengthen the capital sources by hard work and strong team network.</p>',

        ]);
        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Message from Director',
            'slug' => 'message-from-director',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Page',
            'content' => '<p>On behalf of all our employees, I would like to take this opportunity to express my heartfelt thanks to you for supporting Sumber Global Energy (SGE) for the past 12 years.</p>
            <p>It is with great pleasure that SGE has been staying ahead in the coal industry. Our company has an important role in the growth of the coal trading in Indonesia. Even though we are a relatively new rising trading company, we have strong associations with some of the major customers in Indonesia and overseas.</p>
            <p>During the past years SGE has become almost important strategic partner of especially the small and medium scale coal mining concession holders We do believe that our clients&rsquo; success is our accomplishments as a professional coal trading company. Therefore we are grateful for all supports from all business partners and clients.</p>
            <p>Finally I would like to emphasize that SGE is continuously committed to improve our performance to serve only the best and is sincerely thanking their valuable clients and partners for their continued support.</p>',

        ]);
        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Company Policy',
            'slug' => 'company-policy',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Page',
            'content' => '<p>Our company policies and procedures are in place to protect the rights of workers as well as the business interests of employers. We are committed to zero harm to people and the environment, because we believe that Health. Safety, Environment (HSE) and Community responsibilities are the foundation for sustainable our business.</p>
            <p>We have has a long-standing HSE commitment to the highest standards for the health and safety of our employees, customers. and contractors as well as to the protection of the environment in the communities in which we live and work because we want to be successful when it meets its targets toward the goal of zero harm and when it is a valued member of the community in which it operates.</p>',

        ]);
        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Corporate Social Responsibility',
            'slug' => 'corporate-social-responsibility',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Page',
            'content' => '<p>The Company&rsquo;s commitment to provide added value for the<br>community is realized through the implementation of the<br>Corporate Social Responsibility (CSR) program. In 2021, the<br>Company has implemented programs incorporated in Corporate<br>Social Responsibility with the following details:</p>
            <p>Kurban in Eid al-Adha</p>',

        ]);


        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Pemegang saham SGER setuju peningkatan Rp 400 miliar modal dasar',
            'slug' => 'pemegang-saham-sger-setuju-peningkatan-rp-400-miliar-modal-dasar',
            'lang' => 'id',
            'status' => 'Publish',
            'type' => 'Blog',
            'date_gmt' => '2022-09-06',
            'id_category' => 1,
            'content' => '<p>JAKARTA - Pemegang saham&nbsp;<a href="https://www.idnfinancials.com/sger/pt-sumber-global-energy-tbk">PT Sumber Global Energy Tbk (SGER)</a>&nbsp;menyetujui peningkatan modal dasar perusahaan sebesar Rp 400 miliar. Putusan itu berlangsung dalam Rapat Umum Pemegang Saham Luar Biasa (RUPSLB) pada pekan lalu (31/8).<br><br>Michael Harold, Sekretaris Perusahaan PT Sumber Global Energy Tbk (SGER) menyampaikan modal dasar perusahaan menjadi Rp 600 miliar dari sebelumnya Rp 200 miliar. "Keputusan rapat disetujui 99,96% atau lebih dari 2/3 bagian dari jumlah seluruh saham dengan hak suara yang hadir dalam rapat," katanya dalam keterbukaan informasi dikutip Selasa (6/9).<br><br>Keputusan itu sekaligus menyetujui perubahan sejumlah klausul dalam Anggaran Dasar SGER terkait peningkatan modal dasar dan persentase modal ditempatkan serta modal disetor terhadap modal dasar perusahaan.<br><br>Jumlah saham SGER per Juli 2022 sebanyak 3.723.710.904 saham dengan struktur pemiliknya antara lain, PT Sumbermas 54,41%, Vivi Ramalyati Hutama 9,17%, Welly Thomas 6,27%, Antonius Gunawan Gho 6,03%, masyarakat 24,03%, dan Asing 0,09%. (LK)</p>
            <p>sumber: <a href="https://www.idnfinancials.com/id/news/44206/sgers-shareholders-raise-authorised-capital-idr">Pemegang saham SGER setuju peningkatan Rp 400 miliar modal dasar | IDNFinancials</a></p>'

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Anak usaha SGER dapat suntikan modal Rp15 miliar',
            'slug' => 'anak-usaha-sger-dapat-suntikan-modal-rp15-miliar',
            'lang' => 'id',
            'status' => 'Publish',
            'type' => 'Blog',
            'date_gmt' => '2022-09-02',
            'id_category' => 1,
            'content' => '<p>JAKARTA. PT Sumber Mineral Global Abadi (SMGA), salah satu anak usaha PT Sumber Global Energy Tbk (SGER), telah memperoleh suntikan modal senilai Rp15 miliar.</p>
            <p>Rinciannya, sebanyak Rp1,5 miliar berasal dari SGER. Kemudian sisanya sebesar Rp13,5 miliar berasal dari Vivi Ramalyati Hutama.</p>
            <p>Michael Harold, Corporate Secretary SGER, menyampaikan suntikan modal tersebut diberikan pada 29 Agustus 2022. Namun ia tidak menjelaskan perubahan porsi pemegang saham SMGA, akibat adanya suntikan modal tersebut.</p>
            <p>Sebelum memberikan suntikan modal tersebut, SGER mengendalikan 90% saham SMGA per 30 Juni 2022. Sedangkan sisanya dimiliki oleh Vivi Ramalyati Hutama.</p>
            <p>Menurut data idnfinancials.com, SMGA adalah entitas usaha yang menjalankan bisnis perdagangan dan beroperasi mulai 2016. Per 30 Juni 2022, SMGA memiliki total aset sebanyak Rp112,17 miliar. (KR)</p>'

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Sumber Global Energy akan bagikan saham bonus dengan rasio 10:9',
            'slug' => 'sumber-global-energy-akan-bagikan-saham-bonus-dengan-rasio-109',
            'lang' => 'id',
            'status' => 'Publish',
            'type' => 'Blog',
            'id_category' => 1,
            'date_gmt' => '2022-06-24',
            'content' => '<p>JAKARTA. PT Sumber Global Energy Tbk (SGER) mengumumkan rencana pembagian saham bonus sebanyak 2,11 miliar lembar dengan nilai nominal Rp50 per lembar.</p>
            <p>Welly Thomas, Presiden Direktur SGER, menyampaikan rencana tersebut sesuai dengan hasil Rapat Umum Pemegang Saham (RUPS) Tahunan perseroan, yang digelar beberapa hari lalu. Dalam rapat ini, pemegang saham menyetujui pembagian saham bonus dengan rasio 10:9.</p>
            <p>Saham bonus akan diberikan kepada pemegang saham SGER, yang namanya tercatat pada saat recording date pada 1 Juli 2022. Sementara pembagian saham bonus akan dilaksanakan pada 15 Juli 2022.</p>
            <p>Per 31 Desember 2021, SGER memiliki total ekuitas sebanyak Rp395,21 miliar. Total saham bonus yang akan dibagikan perseroan, setara dengan 26,7% dari total ekuitas.</p>
            <p>PT Sumbermas Inti Energi tercatat sebagai pemegang saham pengendali SGER, dengan porsi kepemilikan saham 54,4% per 31 Maret 2022. Investor publik tercatat memiliki 18,7% saham, dan sisanya dimiliki oleh sejumlah investor perorangan. (KR)</p>
            <p>Sumber : <a href="https://www.idnfinancials.com/id/news/43466/sumber-global-energy-bonus-shares-ratio">Sumber Global Energy akan bagikan saham bonus dengan rasio 10:9 | IDNFinancials</a></p>'

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'PT Sumber Mineral Global Abadi',
            'slug' => 'pt-sumber-mineral-global-abadi',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Blog',
            'id_category' => 3,
            'content' => "<p>PT. SUMBER MINERAL GLOBAL ABADI is a subsidiary of the company that handle the domestic trading for coal, nickel and other commodities.</p>
            <p>SMGA also serves as a holding for the company's investment in several new and renewable energy development activities.</p>
            <p>Through PT Sumber Mineral Global Abadi, the company invests in PT Suryamica and PT Asia Mulia Power.</p>"

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'PT Mandau Batu Alam',
            'slug' => 'pt-mandau-batu-alam',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Blog',
            'id_category' => 3,
            'content' => "<p>Engaged in mining contractors for coaL and other minerals to support the company's trading activities.</p>",

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'PT Angkasa Nusa Graha',
            'slug' => 'pt-angkasa-nusa-graha',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Blog',
            'id_category' => 3,
            'content' => "PT Angkasa Nusa Graha",

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'PT Transmarina Pelabuhan Indonesia',
            'slug' => 'pt-transmarina-pelabuhan-indonesia',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Blog',
            'id_category' => 3,
            'content' => "PT Transmarina Pelabuhan Indonesia",

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'PT Hineni Resources Pte, Ltd',
            'slug' => 'pt-hineni-resources-pte-ltd',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Blog',
            'id_category' => 3,
            'content' => "PT Hineni Resources Pte, Ltd",

        ]);

        DB::table('posts')->insert([

            'user_id' => 1,
            'title' => 'Senior Corporate Finance',
            'slug' => 'senior-corporate-finance',
            'lang' => 'en',
            'status' => 'Publish',
            'type' => 'Career',
            'content' => "<p><strong>Qualifications:</strong><br>Education min Bachelor (S1) / Master Degree Majoring in Economics / Accounting (Preferably)<br>Max. age 50 years old (Preferably)<br>Experience in Corporate Finance at least 5 years at Manager level, Preferably&nbsp;<br>Have experience related Public Company Regulations (OJK, IDX)<br>Have good analytical skills, especially for restructuring, M&amp;A<br>Have good written and spoken English, a plus if able to speak Mandarin</p>
            <p><strong>Responsibilities :</strong></p>
            <ul>
            <li>Develop a long-term strategy for the next 5 years and set it out in the annual short-term strategy (business plan) for the departments under its authority.</li>
            <li>Make a plan for the budget requirements needed by the sections under the authority</li>
            <li>Making operational budget submissions, ensuring budget efficiency, utilizing the given budget</li>
            <li>Reviewing the draft funding/loan agreement</li>
            <li>Feasible Study or Valuatiob of new projects</li>
            <li>Prepare Planning Projection Finance</li>
            <li>Help check financial reports related to funding, Financial reporting</li>
            </ul>
            <p>Apply : career@sumberglibalenergy.com</p>",

        ]);

    }
}
