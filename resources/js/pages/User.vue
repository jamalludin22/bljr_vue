<template>
<div>
    <section> 
        <h1>Daftar User</h1>
        <router-link to="/user/create"> Registrasi </router-link>
          <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Data User</div>

                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>nomer</th>
                                    <th>Nama</th>
                                    <th>email</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(user,index) in users" v-bind:key="user">
                                    <td>{{index}}</td>
                                    <td>{{ user.name }}</td>
                                    <td>{{ users.email }}</td>
                                    <td class="text-center">
                                               <a href="" @click.prevent="handlingDelete">Hapus</a>
                                               <a href="" @click.prevent="Edit">Edit</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- <ul>
            <li v-for ="user in users" v-bind:key="user">
                <router-link v-bind:to= "profile_uri(user.nama)">{{user.nama}}</router-link>
                <a href="" @click.prevent="lihatUser(user.id)">{{user.name}}</a>
            </li>
        </ul> -->
    </section>
</div>
</template>

<script>
export default{
    data(){
        return{
            users: []
        }
    },
    mounted(){
     this.getUsers()
    },

    methods:{
        getUsers(){
            axios.get('/api/users').then((response)=>{
            console.log(response)
            this.users= response.data
        })
        },
        profile_uri(nama){
            return '/user/'+ nama.toLowerCase() // toLowerCase() digunakkan untuk merubah huruf kecil 
        },
        lihatUser(id){
            // this.$router.push('/user/' + nama.toLowerCase())
            this.$router.push({
                name: 'Profile',
                params: {id}
            })
        }
    }
}
</script>
