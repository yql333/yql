<template>
  <div id="login">
    <p class="guan">管理员注册</p>
    <div class="deng">
      <p><span>用户名:</span><input type="text" v-model="uName"></p>
      <p><span>密码:</span><input type="text" v-model="uPwd"></p>
      <button class="zc" @click="zc">注册</button>
    </div>
  </div>
</template>

<script>


export default {
    data(){
        return {
        uName:"",
        uPwd:"",
        }
    },
  methods:{
    zc(){
        let uName=this.uName
        let uPwd=this.uPwd
        let url="http://localhost:8080/vue/dome1/src/api/test.php?uName="+uName+"&uPwd="+uPwd;
        console.log(url)
        this.$axios.get(url).then((res)=>{
            console.log(res.data)
            if(res.data.msg=="ok")
            { 
                alert('注册成功')
                this.$router.push('/')
                localStorage["uToken"] = res.data.token
               
            }
           
        })
    }
  }
}
</script>

<style>
.zc{width: 80px;margin-top: 20px;height: 40px;margin-left: 100px;}
</style>
