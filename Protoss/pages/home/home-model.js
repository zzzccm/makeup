import {
  Base
} from '../../utils/base.js';

class Home extends Base {

  constructor() {
    super();
  }

  //首页轮播图
  getBannerData(id, callback) {
    var params = {
      url: 'banner/' + id,
      sCallback:function(res){
        callback && callback(res.items);
      }
    }
    this.request(params);
  }

  //精选主题
  getThemeData(callback){
    var param = {
      url: 'theme/?ids=1,2,3',
      sCallback:function(data){
        callback && callback(data);
      }
    }
    this.request(param);
  }

  //最近新品
  getProductsData(callback) {
    var param = {
      url: 'product/recent',
      sCallback: function (data) {
        callback && callback(data);
      }
    }
    this.request(param);
  }

  
}

export {
  Home
};