<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';


//$category1 = new \Hillel\model\Category();
//$category1->title = 'Chemistry';
//$category1->slug = '18+';
//$category1->save();

//$category2 = new \Hillel\model\Category();
//$category2->title = 'Math';
//$category2->slug = '5+';
//$category2->save();

//$category3 = new \Hillel\model\Category();
//$category3->title =  'Psyho';
//$category3->slug = '21+';
//$category3->save();

//$category4 = new \Hillel\model\Category();
//$category4->title = 'Literature';
//$category4->slug = '11+';
//$category4->save();

//$category5 = new \Hillel\model\Category();
//$category5->title = 'Sport';
//$category5->slug = '4+';
//$category5->save();

//$category5 = \Hillel\model\Category::find(5);
//$category5->title = 'Drama';
//$category5->slug ='Not recommended for people with mental issues';
//$category5->save();


//$category = \Hillel\model\Category::find(4);
//$category->delete();
//END OF 1 PART OF HOMEWORK

/*$post = new Hillel\model\Post();
$post->title = 'Atlantida';
$post->slug = 'Answer on your question you can find in king eyes';
$post->body = 'Introduction and eleven charpets of story';
$post->category_id = '2';
$post->save();
$post2 = new Hillel\model\Post();
$post2->title = 'Atlantida2';
$post2->slug = 'New queen-- KIDA';
$post2->body = 'Introduction and eighteen charpets of story';
$post2->category_id = '2';
$post2->save();
$post3 = new Hillel\model\Post();
$post3->title = 'Atlantida3';
$post3->slug = 'Nautilus and fallen dinasty';
$post3->body = 'Introduction and ten charpets of story';
$post3->category_id = '2';
$post3->save();
$post4 = new Hillel\model\Post();
$post4->title = 'Midas';
$post4->slug = 'Did gold is the everything that you need?';
$post4->body = 'Short story about thief who became a legend ';
$post4->category_id = '5';
$post4->save();
$post5 = new Hillel\model\Post();
$post5->title = 'Simple geometry  ';
$post5->slug = 'Your brain - your life';
$post5->body = '23 charpets and 12 pages with answers';
$post5->category_id = '3';
$post5->save();
$post6 = new Hillel\model\Post();
$post6->title = 'Healthy body - healthy soul';
$post6->slug = 'If you can control your body - you can do everything';
$post6->body = '457 pages with popular description and illustrations ';
$post6->category_id = '5';
$post6->save();
$post7 = new Hillel\model\Post();
$post7->title = 'Lie to me';
$post7->slug = 'Simple ways to understand when someone lie to you';
$post7->body = '700 pages of useless information';
$post7->category_id = '5';
$post7->save();
$post8 = new Hillel\model\Post();
$post8->title = 'Algebra in everyday life';
$post8->slug = 'Burn in hell';
$post8->body = '973 Hellish cauldron';
$post8->category_id = '3';
$post8->save();
$post9 = new Hillel\model\Post();
$post9->title = 'PHP manual';
$post9->slug = 'Very aggressive homeworks ';
$post9->body = '300 hundred bucks and dungeon muster ';
$post9->category_id = '2';
$post9->save();
$post10 = new Hillel\model\Post();
$post10->title = 'Acid for ex';
$post10->slug = 'Let him die with his whores in one day';
$post10->body = 'Most important manual for teenagers ';
$post10->category_id = '2';
$post10->save();*/

/*$tag = new \Hillel\model\Tag();
$tag->title = 'ABRA';
$tag->slug = 'jdfhbsdv';
$tag->save();
$tag2 = new \Hillel\model\Tag();
$tag2->title = 'ABRA';
$tag2->slug = 'jdfhbsdv';
$tag2->save();
$tag3 = new \Hillel\model\Tag();
$tag3->title = 'ABRA';
$tag3->slug = 'jdfhbsdv';
$tag3->save();
$tag4 = new \Hillel\model\Tag();
$tag4->title = 'ABRA';
$tag4->slug = 'jdfhbsdv';
$tag4->save();
$tag5 = new \Hillel\model\Tag();
$tag5->title = 'ABRA';
$tag5->slug = 'jdfhbsdv';
$tag5->save();
$tag6 = new \Hillel\model\Tag();
$tag6->title = 'ABRA';
$tag6->slug = 'jdfhbsdv';
$tag6->save();
$tag7 = new \Hillel\model\Tag();
$tag7->title = 'ABRA';
$tag7->slug = 'jdfhbsdv';
$tag7->save();
$tag8 = new \Hillel\model\Tag();
$tag8->title = 'ABRA';
$tag8->slug = 'jdfhbsdv';
$tag8->save();
$tag9 = new \Hillel\model\Tag();
$tag9->title = 'ABRA';
$tag9->slug = 'jdfhbsdv';
$tag9->save();
$tag10 = new \Hillel\model\Tag();
$tag10->title = 'ABRA';
$tag10->slug = 'jdfhbsdv';
$tag10->save();*/
/*$tags = \Hillel\Model\Tag::all();
foreach ($tags as $tag)
{
    $tags_id_arr[] = $tag->id;
}

$posts = \Hillel\Model\Post::all();
foreach ($posts as $post)
{

    $post->tags()->attach([$tags_id_arr[array_rand($tags_id_arr,1)],$tags_id_arr[array_rand($tags_id_arr,1)],$tags_id_arr[array_rand($tags_id_arr,1)]]);
    //$post->save();
}*/

$post = \Hillel\model\Post::find(6);
$post->delete();



