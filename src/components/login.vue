<template>
  <div id="login">
    <p class="guan">管理员登录</p>
    <div class="deng">
      <p><span>用户名:</span><input type="text" v-model="uName"></p>
      <p><span>密码:</span><input type="text" v-model="uPwd"></p>
      <p><span>验证码:</span><input type="text"> <button>获取手机验证码</button></p>
      <p class="dom"><button class="dl" @click="btn">登录</button><button class="zhu" @click="zhu">注册</button></p>
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
    btn(){
       this.$router.push('/HelloWorld')
      let uName=this.uName
        let uPwd=this.uPwd
      let url="http://localhost:8080/vue/dome1/src/api/login.php?uName="+uName+"&uPwd="+uPwd+"$token="+localStorage["uToken"];

        console.log(url)
        this.$axios.get(url).then((res)=>{
            console.log(res.data)
            if(res.data.msg=="loginOK")
            { 
                alert('登陆成功')
                this.$router.push('/HelloWorld')
                localStorage["uToken"] = res.data.token
               
            }
           
        })
    },
    zhu(){
      this.$router.push('/zhu')
       
    }
  }
}
</script>

<style>
#login {
 width: 100%;
 height: 100%;
 background: url('../../public/1.jpg') no-repeat;
 background-size: 100% 100%;
}
.guan{width: 100%;height: 50px;line-height: 50px;padding-left: 10px;box-sizing: border-box;font-size: 30px;color: teal;}
.deng{width: 400px;height: 300px;margin: 0 auto;border: 1px solid #cccccc;color: white;}
.deng p{margin: 0 auto;display: block;margin-left: 15px;margin-top: 20px;}
.deng p input{height: 30px;}
.deng p button{margin-left: 15px;}
.deng p span{display: inline-block;width: 80px;}
.dom{display: flex;padding-left: 60px;}
.dl{width: 80px;margin-top: 20px;height: 40px;}
.zhu{width: 80px;margin-top: 20px;height: 40px;}
</style>
