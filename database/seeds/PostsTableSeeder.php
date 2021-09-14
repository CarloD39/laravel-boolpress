<?php

use Illuminate\Database\Seeder;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $posts = [
            [
                'author' => 'Gino Blu',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia euismod pretium. Nulla facilisi. Nam id blandit ex. In sapien lorem',
                'status' =>  'Excited',
                'cover' => 'https://st4.depositphotos.com/13318524/i/600/depositphotos_288057800-stock-photo-portrait-young-happy-excited-man.jpg',
                'like' => '8',
                'comment_user' => 'Aliquam non dolor nulla. Curabitur et ullamcorper neque'
            ],
            [
                'author' => 'Carlo Lodo',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia euismod pretium. Nulla facilisi. Nam id blandit ex. In sapien lorem,',
                'status' => 'Anxious',
                'cover' => 'https://phase.ghost.io/content/images/2020/10/thought-1.jpg',
                'like' => '5',
                'comment_user' => 'Aliquam non dolor nulla.'
            ],
            [
                'author' => 'Francesco Bianco',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia euismod pretium. Nulla facilisi. Nam id blandit ex. In sapien lorem,',
                'status' => 'Calm',
                'cover' => 'https://images-eu.ssl-images-amazon.com/images/I/311l0UZqfcL.png',
                'like' => '55',
                'comment_user' => 'nteger vestibulum orci felis, nec rutrum velit tempus aliquet.'
            ]
        ];

        foreach($posts as $post){
            $postObject = new Post();
            $postObject->author = $post['author'];
            $postObject->abstract = $post['abstract'];
            $postObject->status = $post['status'];
            $postObject->cover = $post['cover'];
            $postObject->like = $post['like'];
            $postObject->comment_user = $post['comment_user'];
            $postObject->save();
        }

    }
}
