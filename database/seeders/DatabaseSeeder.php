<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Book;
use App\Models\BookTag;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();
        // Tag::factory(3)->create();
        // Book::factory(20)->create();
        
        Book::create([
            'title' => "Fullmetal Alchemist",
            'slug' => "fullmetal-alchemist",
            'description' => "Alchemists are knowledgeable and naturally talented individuals who can manipulate and modify matter due to their art. Yet despite the wide range of possibilities, alchemy is not as all-powerful as most would believe. Human transmutation is strictly forbidden, and whoever attempts it risks severe consequences. Even so, siblings Edward and Alphonse Elric decide to ignore this great taboo and bring their mother back to life. Unfortunately, not only do they fail in resurrecting her, they also pay an extremely high price for their arrogance: Edward loses his left leg and Alphonse his entire body. Furthermore, Edward also gives up his right arm in order to seal his brother's soul into a suit of armor.

            Years later, the young alchemists travel across the country looking for the Philosopher's Stone, in the hopes of recovering their old bodies with its power. However, their quest for the fated stone also leads them to unravel far darker secrets than they could ever imagine.",
            'author' => "Hiromu Arakawa",
            'price' => 50000,
        ]);
        Book::create([
            'title' => "Monster",
            'slug' => "monster",
            'description' => "Kenzou Tenma, a renowned Japanese neurosurgeon working in post-war Germany, faces a difficult choice: to operate on Johan Liebert, an orphan boy on the verge of death, or on the mayor of Düsseldorf. In the end, Tenma decides to gamble his reputation by saving Johan, effectively leaving the mayor for dead.

            As a consequence of his actions, hospital director Heinemann strips Tenma of his position, and Heinemann's daughter Eva breaks off their engagement. Disgraced and shunned by his colleagues, Tenma loses all hope of a successful career—that is, until the mysterious killing of Heinemann gives him another chance.
            
            Nine years later, Tenma is the head of the surgical department and close to becoming the director himself. Although all seems well for him at first, he soon becomes entangled in a chain of gruesome murders that have taken place throughout Germany. The culprit is a monster—the same one that Tenma saved on that fateful day nine years ago.",
            'author' => "Naoki Urasawa",
            'price' => 80000,
        ]);
        Book::create([
            'title' => "Slam Dunk",
            'slug' => "slam-dunk",
            'description' => "Hanamichi Sakuragi, a tall, boisterous teenager with flame-red hair and physical strength beyond his years, is eager to put an end to his rejection streak of 50 and finally score a girlfriend as he begins his first year of Shohoku High. However, his reputation for delinquency and destructiveness precedes him, and most of his fellow students subsequently avoid him like the plague. As his first day of school ends, he is left with two strong thoughts: \"I hate basketball\" and \"I need a girlfriend.\"

            Haruko Akagi, ignorant of Hanamichi's history of misbehavior, notices his immense height and unwittingly approaches him, asking whether or not he likes basketball. Overcome by the fact that a girl is speaking to him, the red-haired giant blurts out a yes despite his true feelings. At the gym, Haruko asks if he can do a slam dunk. Though a complete novice, Hanamachi palms the ball and makes the leap...but overshoots, slamming his head into the backboard. Amazed by his near-inhuman physical abilities, Haruko quickly notifies the school's basketball captain of his feat. With this, Hanamichi is unexpectedly thrust into a world of competition for a girl he barely knows, but he soon discovers that there is perhaps more to basketball than he once thought.",
            'author' => "Takehiko Inoue",
            'price' => 100000,
        ]);
        Book::create([
            'title' => "Vinland Saga",
            'slug' => "vinland-saga",
            'description' => "Thorfinn, son of one of the Vikings' greatest warriors, is among the finest fighters in the merry band of mercenaries run by the cunning Askeladd, an impressive feat for a person his age. However, Thorfinn is not part of the group for the plunder it entails—instead, for having caused his family great tragedy, the boy has vowed to kill Askeladd in a fair duel. Not yet skilled enough to defeat him, but unable to abandon his vengeance, Thorfinn spends his boyhood with the mercenary crew, honing his skills on the battlefield among the war-loving Danes, where killing is just another pleasure of life.

            One day, when Askeladd receives word that Danish prince Canute has been taken hostage, he hatches an ambitious plot—one that will decide the next King of England and drastically alter the lives of Thorfinn, Canute, and himself. Set in 11th-century Europe, Vinland Saga tells a bloody epic in an era where violence, madness, and injustice are inescapable, providing a paradise for the battle-crazed and utter hell for the rest who live in it.",
            'author' => "Makoto Yukimura",
            'price' => 130000,
        ]);
        Book::create([
            'title' => "Jumyou wo Kaitotte Moratta. Ichinen ni Tsuki, Ichimanen de.",
            'slug' => "jumyou-wo-kaitotte-moratta-ichinen-ni-tsuki-ichimanen-de",
            'description' => "Helpless and struggling for cash, 20-year-old Kusunoki sells the last of his possessions to buy food. Noticing his poverty, an old shop owner directs him to a store that supposedly purchases lifespan, time, and health. While not completely believing the man's words, Kusunoki nevertheless finds himself at the address out of desperation and curiosity.

            Kusunoki is crushed when he finds out the true monetary value of his lifespan—totaling a meager three hundred thousand yen. Deciding to sell the next 30 years of his life for ten thousand yen per year, Kusunoki is left with only three months to live. After heading home with the money, he is greeted by an unexpected visitor: the same store clerk he sold his lifespan to. She introduces herself as Miyagi, the one tasked with the job of observing him until the last three days of his life.
            
            Jumyou wo Kaitotte Moratta. Ichinen ni Tsuki, Ichimanen de. follows the remaining three months of Kusunoki's life as he confronts lingering regrets from the past and discovers what truly gives life value.",
            'author' => "Sugaru Miaki",
            'price' => 20000,
        ]);
        Book::create([
            'title' => "Utsuro no Hako to Zero no Maria",
            'slug' => "utsuro-no-hako-to-zero-no-maria",
            'description' => "Kazuki Hoshino values his everyday life above all else. He spends the days carefree with his friends at school, until the uneventful bliss suddenly comes to a halt with the transfer of the aloof beauty Aya Otonashi into his class and her cold, dramatic statement to him immediately upon arrival:

                \"I'm here to break you. This is the 13,118th time I've transferred. After so many occasions, I have to say that this is all starting to grate on me, which is why this time I'm spicing things up with a proper declaration of war.\"
                
                And with those puzzling words, the ordinary days that Kazuki loved so dearly become a cycle of turmoil and fear—Aya's sudden appearance signals the unraveling of unseen mysteries surrounding Kazuki's seemingly normal friends, including the discovery of mysterious devices known as \"boxes.\"",
            'author' => "Eiji Mikage",
            'price' => 150000,
        ]);
        Book::create([
            'title' => "Nana",
            'slug' => "nana",
            'description' => "Nana Komatsu is a naive, unmotivated girl who spends her high school days chasing one crush after the other. Despite continually facing failure in her quest for love, her spirits have never dampened. At the age of 20, she finds herself on a train to Tokyo with hopes of reuniting with her current boyfriend.

            Nana Osaki, on the other hand, is feisty and prideful. After joining a local band during her high school days, she falls in love with music and one of the band members. However, when faced with the choice between her relationship and her musical career, she chooses the latter and separates from her boyfriend. On her 20th birthday, she boards the same train to Tokyo, like her namesake, where she aims to become a top vocalist.
            
            The two girls with the same name but very different aspirations find themselves sitting together on their journey to the city, and, as fate would have it, eventually share the same apartment. A deep and unique bond is then forged, where they will support each other in this saga of love, music, friendship, and heartbreak.",
            'author' => "Ai Yazawa",
            'price' => 100000,
        ]);
        Book::create([
            'title' => "86-Eighty-Six",
            'slug' => "86-eighty-six",
            'description' => "Nine years ago, the Empire of Giad declared war on all neighboring countries using an army of autonomous drones known as the Legion. Threatened by the soulless killing machines, the Republic of San Magnolia, home to the silver-haired Alba race, evacuated its citizens inside 85 districts and developed supposedly unmanned drones known as Juggernauts to counter the Legion. Even after years of war, the Republic boasts that they have suffered zero casualties. However, the battlefield bathed in crimson recites a different melody...

            The hand dealt to the Colorata people—a minority forced into living in the \"nonexistent\" 86th district—is one of utter contempt and scorn. Looked upon as human filth, they are ordered to pilot the Juggernauts as Processors under the command of Republican Handlers.
            
            Vladilena Milizé, a republican soldier with a strong sense of justice, detests the way her countrymen treat the 86. When she is assigned to the Spearhead Squadron as their handler, she meets a group of oddballs and eventually grows attached to them—particularly their captain, Shinei Nouzen, a boy with a pure sense of purpose and resolve. However, the path they walk is one riddled with death, and growing close to an 86 may have just set Vladilena down a path of despair.",
            'author' => "Asato",
            'price' => 75000,
        ]);

        Tag::create([
            'name' => "Fantasy",
            'slug' => "fantasy"
        ]);
        Tag::create([
            'name' => "Action",
            'slug' => "action"
        ]);
        Tag::create([
            'name' => "Slice of Life",
            'slug' => "slice-of-life"
        ]);
        Tag::create([
            'name' => "Adventure",
            'slug' => "adventure"
        ]);
        Tag::create([
            'name' => "Music",
            'slug' => "music"
        ]);
        Tag::create([
            'name' => "Romance",
            'slug' => "romance"
        ]);
        Tag::create([
            'name' => "Comedy",
            'slug' => "comedy"
        ]);
        Tag::create([
            'name' => "Drama",
            'slug' => "drama"
        ]);

        BookTag::create([
            'book_id' => 1,
            'tag_id' => 1
        ]);
        BookTag::create([
            'book_id' => 1,
            'tag_id' => 2
        ]);
        BookTag::create([
            'book_id' => 1,
            'tag_id' => 5
        ]);
        BookTag::create([
            'book_id' => 2,
            'tag_id' => 2
        ]);
        BookTag::create([
            'book_id' => 2,
            'tag_id' => 3
        ]);
        BookTag::create([
            'book_id' => 2,
            'tag_id' => 6
        ]);
        BookTag::create([
            'book_id' => 2,
            'tag_id' => 8
        ]);
        BookTag::create([
            'book_id' => 3,
            'tag_id' => 3
        ]);
        BookTag::create([
            'book_id' => 3,
            'tag_id' => 4
        ]);
        BookTag::create([
            'book_id' => 4,
            'tag_id' => 5
        ]);
        BookTag::create([
            'book_id' => 5,
            'tag_id' => 6
        ]);
        BookTag::create([
            'book_id' => 5,
            'tag_id' => 8
        ]);
        BookTag::create([
            'book_id' => 6,
            'tag_id' => 2
        ]);
        BookTag::create([
            'book_id' => 6,
            'tag_id' => 4
        ]);
        BookTag::create([
            'book_id' => 6,
            'tag_id' => 7
        ]);
        BookTag::create([
            'book_id' => 7,
            'tag_id' => 2
        ]);
        BookTag::create([
            'book_id' => 7,
            'tag_id' => 6
        ]);
        BookTag::create([
            'book_id' => 7,
            'tag_id' => 7
        ]);
        BookTag::create([
            'book_id' => 7,
            'tag_id' => 8
        ]);
        BookTag::create([
            'book_id' => 8,
            'tag_id' => 1
        ]);
    }
}
