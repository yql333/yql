<template>
  <div class="hello">
    <div class="nav">
      管理系统
    </div>
    <div class="sec">
        <div class="lef">
          <p class="dao">导航栏</p>
            <ul>
              <li>投资完成情况</li>
              <li>项目总结</li>
              <li>交办单</li>
              <li>项目综合信息查询</li>
              <li>投资统计</li>
            </ul>
        </div>
        <div class="rig">
          <p class="wei">位置:用户管理</p>
            <table border="1" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>编号</th>
                  <th>姓名</th>
                  <th>年龄</th>
                  <th>性别</th>
                  <th>编辑</th>
                </tr>
              </thead>
              <tbody>
                <tr align="center">
                  <td>1</td>
                  <td>杨庆龙</td>
                  <td>19</td>
                  <td>男</td>
                  <td><button>删除</button><button>修改</button></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'HelloWorld'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.hello{width: 100%;height: 100%;display: flex;flex-direction: column;}
.nav{width: 100%;height: 80px;background: red;color: white;font-size: 25px;line-height: 80px;padding-left: 20px;background: url(../../public/1.gif) no-repeat;background-size: 100% 100%;}
.sec{flex: 1;background: #cccccc;display: flex;}
.lef{width: 200px;height: 100%;background: red;background: url(../../public/3.gif) no-repeat;background-size: 100% 100%;}
.lef ul{color: white;list-style: none;}
.lef ul li{border-bottom: 1px solid #cccccc;padding-left: 20px;box-sizing: border-box;line-height: 50px;}
.rig{flex: 1;background: url(../../public/2.gif) no-repeat;background-size: 100% 100%;}
.rig table{width: 100%;height: auto;border-left: 0px;color: white;}
.rig table tr td{line-height: 49px;box-sizing: border-box;}
.rig table tr th{line-height: 49px;box-sizing: border-box;}
.wei{width: 100%;line-height: 40px;padding-left: 20px;color: white;}
.dao{width: 100%;line-height: 40px;padding-left: 20px;color: white;border-bottom: 1px solid #cccccc;}

</style>
