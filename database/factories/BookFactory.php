<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = preg_split('/\n/',
            'https://d3i5mgdwi2ze58.cloudfront.net/7hqv6ddaqv363p4hadx6lymotow1
https://d3i5mgdwi2ze58.cloudfront.net/f7nkbyqfsnrrlct3hs01jkrz2vdi
https://d3i5mgdwi2ze58.cloudfront.net/kedoaww5u33ka020nxmaxqscpgiz
https://d3i5mgdwi2ze58.cloudfront.net/j7koelfcv0va5zky4x1ccmpsgcsb
https://d3i5mgdwi2ze58.cloudfront.net/m8sdet02cc7mdl8l6jow8cpl7co2
https://d3i5mgdwi2ze58.cloudfront.net/epke1jolmtb858vv9ctbtxpa8yi6
https://d3i5mgdwi2ze58.cloudfront.net/hwi2qqngyicqz7s7ps4x4k1ei14k
https://d3i5mgdwi2ze58.cloudfront.net/y6mquapl0mzayi0kykdf860zl5ut
https://d3i5mgdwi2ze58.cloudfront.net/jyx2n4emuiwjjfu682ylkh10xyoj
https://d3i5mgdwi2ze58.cloudfront.net/71x1j01kvn4jgpg2nnmfo4lisqjk
https://d3i5mgdwi2ze58.cloudfront.net/6wp7rvgzb8yhfrhobfmu9vi3egby
https://d3i5mgdwi2ze58.cloudfront.net/eri4n5p4j76qhpndecwk2trfjjfi
https://d3i5mgdwi2ze58.cloudfront.net/ctt318djdthx536i3glgdw270dyq
https://d3i5mgdwi2ze58.cloudfront.net/t25h3cf21f4l535cyl9tw5l4kfpb
https://d3i5mgdwi2ze58.cloudfront.net/43ma2b4rlzqbh8181hj7dnpuz5at
https://d3i5mgdwi2ze58.cloudfront.net/arrd4a0qpe7i6ff6jtfmtllqcl6v
https://d3i5mgdwi2ze58.cloudfront.net/k4thdrwtugqhuvacwpowkkuivis8
https://d3i5mgdwi2ze58.cloudfront.net/phz3vc780qvnafu8phrzjyptq75a
https://d3i5mgdwi2ze58.cloudfront.net/kv7bohlfznregsg7wuttncytwvvv
https://d3i5mgdwi2ze58.cloudfront.net/f8uct7xgd8cz5cw1dsz54zc6swlc
https://d3i5mgdwi2ze58.cloudfront.net/kudnd6hjgwhd190ozepfx6g8js7g
https://d3i5mgdwi2ze58.cloudfront.net/d9k5bv8ayav7fntkfeo20uhmgic7
https://d3i5mgdwi2ze58.cloudfront.net/6c7hr2lbqcyizpxiv1oq5w79g9ne
https://d3i5mgdwi2ze58.cloudfront.net/tyxilwq93riaj4702yj9ntkf6o8g
https://d3i5mgdwi2ze58.cloudfront.net/zqqerjm8ewv5z75v1cnk9wmno0rp
https://d3i5mgdwi2ze58.cloudfront.net/bfi7lsm3qq746i49tcda0wuntedh
https://d3i5mgdwi2ze58.cloudfront.net/fps2qqgg0nguiukzdzi2nrwx7nih
https://d3i5mgdwi2ze58.cloudfront.net/consucm8tbyk49godu2uf0yngy3c
https://d3i5mgdwi2ze58.cloudfront.net/bahuiyyfk3eb18ujkrlbi65yrq4z
https://d3i5mgdwi2ze58.cloudfront.net/sm15lqtnyzz03dctpcpjt3jnpqo4
https://d3i5mgdwi2ze58.cloudfront.net/r9z7olkoavrv49e8emd943ui5qvr
https://d3i5mgdwi2ze58.cloudfront.net/f286k461hpyojs41nwzenyd2sv0p
https://d3i5mgdwi2ze58.cloudfront.net/rkbv9fmuqiq53mdn0nm5gbl3i4uc
https://d3i5mgdwi2ze58.cloudfront.net/zkynx2ynupib4x4r3flnd6sggltp
https://d3i5mgdwi2ze58.cloudfront.net/ofaq3wjp8vb7db46pf1ujuq70vpk
https://d3i5mgdwi2ze58.cloudfront.net/0zrhbtta0b5zdb8teow4g4bj31nr
https://d3i5mgdwi2ze58.cloudfront.net/f83tnunj63ss1gstdslkgbwt2mi3
https://d3i5mgdwi2ze58.cloudfront.net/g4x0fb7mqjau2kfbz9envj0ph4jn
https://d3i5mgdwi2ze58.cloudfront.net/iif8mxlx7cok3bj24pkmac1spy6d
https://d3i5mgdwi2ze58.cloudfront.net/1narf2gnmnmihq56hvg5n412qj2u
https://d3i5mgdwi2ze58.cloudfront.net/ydzg0xlc5e6680bthuefj17kqbin
https://d3i5mgdwi2ze58.cloudfront.net/rva9diyvk2itaguyn2h4cjmvxnwi
https://d3i5mgdwi2ze58.cloudfront.net/zjdebfocqm8e1ynism67t1434h8m
https://d3i5mgdwi2ze58.cloudfront.net/c4f6gyfx6ay4c2mvm4oo0sll7al9
https://d3i5mgdwi2ze58.cloudfront.net/roprrdyjxx2qrc0vctj1k9n64fqt
https://d3i5mgdwi2ze58.cloudfront.net/zxuwg9q6du2kazlgngkynslgof5o
https://d3i5mgdwi2ze58.cloudfront.net/sipfu1oc66rend55gj85ymtfb9e8
https://d3i5mgdwi2ze58.cloudfront.net/qbjb2s6tbm6brvruwhi8pekqi968
https://d3i5mgdwi2ze58.cloudfront.net/0z0sqrkmosh7x4anf0pvj190asjz
https://d3i5mgdwi2ze58.cloudfront.net/c5ocu6hs583593c4k92ij9y71soe
https://d3i5mgdwi2ze58.cloudfront.net/c8cqa8m7v6os8wb3l145i6iumr71
https://d3i5mgdwi2ze58.cloudfront.net/5o5jzoeyp5hnejmc0b8ghburw5fl
https://d3i5mgdwi2ze58.cloudfront.net/fyectyb7c3olxy3sszqirniv7yia
https://d3i5mgdwi2ze58.cloudfront.net/vcwkvdlfu4sj3fyne7fgyzaygrcx
https://d3i5mgdwi2ze58.cloudfront.net/cut38xwxunob7tin10ayqa3tu6nt
https://d3i5mgdwi2ze58.cloudfront.net/cv5gz508eqin263u6o6zq10pfzk1
https://d3i5mgdwi2ze58.cloudfront.net/xmp108qddn1jr312169l3g0ol7w0
https://d3i5mgdwi2ze58.cloudfront.net/u6minmfyv0ryx4ih25zrqghpdna1
https://d3i5mgdwi2ze58.cloudfront.net/ol3ejq407gsm75og4ixvj7qbutyn
https://d3i5mgdwi2ze58.cloudfront.net/i7qsnnpgkhg924xeo1aub4awkla8
https://d3i5mgdwi2ze58.cloudfront.net/mrgo6ha1sr1b16lu49437hd8rkcl
https://d3i5mgdwi2ze58.cloudfront.net/f5we4umnqpcdgc1njfikubmmyi4v
https://d3i5mgdwi2ze58.cloudfront.net/hycn2c0c30piy4uzl1odjt3rf7mw
https://d3i5mgdwi2ze58.cloudfront.net/kzs29183t4y750k4ffm087f7tb6z
https://d3i5mgdwi2ze58.cloudfront.net/puqf2c4yqf3nw2bf2yel0w0vtmrx
https://d3i5mgdwi2ze58.cloudfront.net/elxqx19ti2sn9vccsk2h64h7iqhc
https://d3i5mgdwi2ze58.cloudfront.net/no7i4th09pv4tdw9g4xf929w3fdi
https://d3i5mgdwi2ze58.cloudfront.net/2v05vz7oibe2oh00d0jng1amrir9
https://d3i5mgdwi2ze58.cloudfront.net/32ao4s9lipi76tizwsswgo92lnq7
https://d3i5mgdwi2ze58.cloudfront.net/sbxwizg11xq29iaqtr1h6ahipv4z
https://d3i5mgdwi2ze58.cloudfront.net/4guekczng2nxwie03rvio7vtww8o
https://d3i5mgdwi2ze58.cloudfront.net/gusr1s7zz4o091z9ajp4zxynyepc
https://d3i5mgdwi2ze58.cloudfront.net/4ra26cgqc6lskurg005wyrn9s9cx
https://d3i5mgdwi2ze58.cloudfront.net/l1zmmqbn5l2vze3asjeb3m9jrd06
https://d3i5mgdwi2ze58.cloudfront.net/g17ev15l107rmmros75azhdgdrym
https://d3i5mgdwi2ze58.cloudfront.net/i0hwsqnsg2zhcsqg6ze3ged3ciie
https://d3i5mgdwi2ze58.cloudfront.net/50h3s5n4n34nm6jscpoxhctu3bjr
https://d3i5mgdwi2ze58.cloudfront.net/7cgtj7g6klysxlghtcw0vetmnd3y
https://d3i5mgdwi2ze58.cloudfront.net/lbx2xixvedo7et2cc665p0a4t0jk
https://d3i5mgdwi2ze58.cloudfront.net/5g1zjlxzc5npn7n5l8m5n1hhye28
https://d3i5mgdwi2ze58.cloudfront.net/7nx41vm6b0bcwv5yqvyftr1yhckp
https://d3i5mgdwi2ze58.cloudfront.net/z5h4c75u09hev6jcko74yjwgv95m
https://d3i5mgdwi2ze58.cloudfront.net/v6jxs6lqenc5538olz3m8xbq1z3d
https://d3i5mgdwi2ze58.cloudfront.net/xhe9j5s79esy88oggjage2k0k4zd
https://d3i5mgdwi2ze58.cloudfront.net/0h6zosdj0fbjdtujlcfux2a2eqp6
https://d3i5mgdwi2ze58.cloudfront.net/66qdzvlxzi54zubbhf2lp3yjijs2
https://d3i5mgdwi2ze58.cloudfront.net/4vuecpkl5hv5h9l3oupyze6cuanq
https://d3i5mgdwi2ze58.cloudfront.net/9cp1mgx9ss7mkhkigldr6f1b9yt1
https://d3i5mgdwi2ze58.cloudfront.net/5nmmah4ashl97iuq1icow8uzzxxd
https://d3i5mgdwi2ze58.cloudfront.net/t0do4sf9cmbj8oiji2s3e0gyzmu6
https://d3i5mgdwi2ze58.cloudfront.net/b8gmmodnizudboxrtrrih182raes
https://d3i5mgdwi2ze58.cloudfront.net/z7csug60545f7486tnl4afhja9nv
https://d3i5mgdwi2ze58.cloudfront.net/j688zkiqqzi7gk67gu5qkvvpxgyv
https://d3i5mgdwi2ze58.cloudfront.net/0snjhc46o5lxjqk21pli61iarzbk
https://d3i5mgdwi2ze58.cloudfront.net/l27opvtonn91ug7bsn82f6897ewc
https://d3i5mgdwi2ze58.cloudfront.net/r7ht4t02yt2ofa7rtsy8any71i2r
https://d3i5mgdwi2ze58.cloudfront.net/4m6dgn455m2s137fvvtish23cri0
https://d3i5mgdwi2ze58.cloudfront.net/ffal6ue3orhz8wm9m9srqok3dhqr
https://d3i5mgdwi2ze58.cloudfront.net/7w8i04azjluymxi5yyo7wmy7jo28
https://d3i5mgdwi2ze58.cloudfront.net/wltv7hw2ib2d7kgd11pdiecpbe5w');
        return [
            'title' => $this->faker->words(3,1),
            'body' => $this->faker->sentences(5,1),
            'author_id' => Author::all()->random()->id,
            'img_source' => $images[array_rand($images)]
        ];
    }
}
