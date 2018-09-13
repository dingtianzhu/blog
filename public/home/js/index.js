//页面全局变量
var header = new Vue({
    el: '#app-header',
    data: {
        msg_wx: "关注微信号",
        msg_wx_src: 'image/webwxgetmsgimg.jpg',
        msg_tel: '联系电话:13110092730(服务时间:9:00-20:00)',
        msg_title: '个性网站建设,给你不一样的体验',
        msg_content: '专业搭建企业官网、个人网站、电子商务网站、微信小程序和数据库管理系统开发',
        msg_blog: '我的博客',
        msg_url: 'http://blog.ptptask.top:8000',
        msg_email: '电子邮箱:1069470980@qq.com',
        msg_blog_src: 'image/loginLog.jpg',
        msg_log_src: 'image/icon.png',
        msg_support: '当前浏览器版本不支持该功能',
        dd_class: 'glyphicon-menu-down',
        canvas_class: 'nocanvas',

    },
    methods: {
        click: function () {
            if (this.dd_class === "glyphicon-menu-down") {
                this.dd_class = "glyphicon-menu-up";
                this.canvas_class = "canvas";
            } else {
                this.dd_class = "glyphicon-menu-down";
                this.canvas_class = "nocanvas";
            }
        },

    },

});

// var about = new Vue({
//     el: "#index-about",
//     data: {
//         person: {
//             image: 'image/person.png',
//             name: '丁天柱',
//             job: '高级开发工程师',
//             info: '2013年进入计算机行业;2014年后半年到2015年初，进行学习并独立开发;2015年夏参加学校企业合作在中软国际进行过1个月的前端开发学习。 至今已有3年编程开发经验。大学就读于天津理工大学计算机科学与工程学院计算机科学与技术专业。学习过计算机相关的科目有：C语言、C++语言、Java语言、C#语言、计算机操作系统、数据库系统概论、软件工程导论、计算机组成原理、计算机网络、编译原理、计算机安全防御等学科。擅长PHP/Java+H5全栈开发, app开发,微信小程序开发、 算法, 爬虫, 大数据等;熟悉网站的开发到服务其搭建再到网站发布运营。熟悉的前端框架有bootstrap3.0和4.0，掌握Vuejs、react等基于ES6的组件化开发。熟悉掌握后端开发框架ThinkPHP5.0、laravel各个版本、yii2.0和SpringMVC。能独立搭建LNMP、LAMP等服务器运行环境。熟练的搭建数据库以及优化关系型数据库。熟练的书写各类第三方接口以及数据对接交互。熟练的使用git、svn能进行定时的代码管理和更新。期间做过一年的外包兼职。曾效力于：天津汇强科技有限公司、华胜天成科技股份有限公司以及菲戈博特智能科技有限公司。分别担任过PHP后台开发工程师、 运维工程师以及全栈开发工程师。为人随和，思维清晰，热爱生命、热爱学习。生命不休、学习不止。',
//
//         },
//         flows: [
//             {
//                 img: 'image/loginLog.jpg',
//                 title: '项目图片',
//                 msg: '第一步:交流沟通',
//                 info: '通过双方的有效沟通，确立需求，并且确立合作细节',
//             },
//             {
//                 img: 'image/loginLog.jpg',
//                 title: '项目图片',
//                 msg: '第二步:签订合同',
//                 info: '通过第一步后，明确开发周期，以及开发过程中遇到的一些问题处理协议，双方签订劳动合同',
//             },
//             {
//                 img: 'image/loginLog.jpg',
//                 title: '项目图片',
//                 msg: '第三步:提交测试',
//                 info: '通过我方在开发周期内开发完成，经负责人提交给你方进行性功能测试。(具体付款方式参见具体劳动合同)',
//             },
//
//         ],
//         promises: [
//             {
//                 img: 'image/loginLog.jpg',
//                 title: '项目图片',
//             },
//             {
//                 img: 'image/loginLog.jpg',
//                 title: '项目图片',
//             },
//         ],
//         titles: [
//             {
//                 name: '我们的团队',
//                 active: 'active',
//                 id: 'home-tab',
//                 href: '#home',
//                 aria_controls: 'home',
//                 aria_selected: 'true',
//
//             },
//             {
//                 name: '我们的流程',
//                 active: '',
//                 id: 'profile-tab',
//                 href: '#profile',
//                 aria_controls: 'profile',
//                 aria_selected: 'false',
//             },
//             {
//                 name: '我们的服务',
//                 active: '',
//                 id: 'contact-tab',
//                 href: '#contact',
//                 aria_controls: 'contact',
//                 aria_selected: 'false',
//             },
//         ],
//         divshow: false,
//         imgshow: true,
//         msg_about_us: '关于我们',
//     },
//     methods: {},
// });
// var product = new Vue({
//     el: "#index-product",
//     data: {
//
//         images: [
//             {
//                 img: 'image/renfu_f.png',
//                 title: '仁福管理系统',
//                 description: '一个后台信息管理系统',
//                 url: 'http://renfu.ptptask.top:8000',
//
//             },
//             {
//                 img: 'image/vpn_f.png',
//                 title: 'VPN管理系统',
//                 description: '一个后台信息管理系统',
//                 url: 'http://vpn.ptptask.top:8000',
//             },
//             {
//                 img: 'image/smart_f.png',
//                 title: 'Smart管理系统',
//                 description: '一个后台信息管理系统',
//                 url: 'http://smart.ptptask.top:8000',
//             },
//             {
//                 img: 'image/yii_f.png',
//                 title: 'Yii管理系统',
//                 description: '一个后台信息管理系统',
//                 url: 'http://yii.ptptask.top:8000',
//             },
//         ],
//         click: '点击进入',
//         alt: '项目图片',
//         msg_product: '项目展示',
//         msg_more: 'more',
//
//
//     },
// });
var footer = new Vue({
    el: "#app-footer",
    data: {
        msg_wx: "关注微信号",
        msg_wx_src: "/image/webwxgetmsgimg.jpg",
        msg_tel: '联系电话:13110092730',
        msg_email: '电子邮箱:1069470980@qq.com',
        msg_info: '隶属个人版权所有 © 2018 Web by',
        msg_web: 'http://www.ptptask.com:8000',
    }
});

