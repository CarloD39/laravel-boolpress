<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-for="post in posts" :key="post.id" class=" card col-sm-4">   <!-- (5) cicliamo con il v-for -->
                <div class="card-picture" style="width: 100%">
                    <img class="post-picture" :src="post.cover" alt="">
                </div>
                <div class="description-post">
                    <h3 class="title-author">{{post.author}}</h3>
                    <span class="status-post">{{post.status}}</span>
                    <p class="about">{{post.abstract}}</p>
                    <span></span>
                    <p class="comment">{{post.comment}}</p>
                </div>
                <div class="action-post">
                    <a href="">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </a>                 
                </div>       
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.getPosts()  // (2) qui richiamiamo il metodo, viene letteralmente 'montato' dal mounted
        },

        data() {      // (3) 'collettore di dati' ovvero un metodo che ritorna un oggetto js post che all'inizio é vuoto
            return {
                posts: []
            }
        },

        methods: {
            getPosts() {
                axios.get('/api/posts').then((response)=>{   // (1) not an entire url cause its in the same domain
                    this.posts = response.data // (4)
                });
            }
        }
    }
</script>
