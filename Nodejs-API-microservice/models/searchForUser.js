var db=require('./db');

module.exports={
    get:function (search,callback){
        var sql="select * from users";
        console.log(sql);
        db.getResults(sql,function (result) {
            if(result.length>0){
                callback(result);
            }
            else {
                callback([]);
            }
        });
    },
}
