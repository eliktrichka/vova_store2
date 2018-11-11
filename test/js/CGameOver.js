function CGameOver(){
    var _oText;
    var _oGroup;
    
    this._init = function(){
        _oGroup = new createjs.Container();
        _oGroup.alpha = 0;
        _oGroup.visible=false;
        
        var oBg = new createjs.Bitmap(s_oSpriteLibrary.getSprite('msg_box'));
        
        var oSprite = s_oSpriteLibrary.getSprite('but_game_small_bg');
        var oButExit = new CGfxButton((CANVAS_WIDTH/2),CANVAS_HEIGHT -164,oSprite,_oGroup);
        oButExit.addEventListener(ON_MOUSE_UP, this._onButExitRelease, this);
        
        _oText = new createjs.Text("","bold 20px Arial", "#ffffff");
        _oText.x = (CANVAS_WIDTH - 89);
        _oText.y = CANVAS_HEIGHT - 25;
        _oText.textAlign = "center";
        _oGroup.addChild(_oText);

        _oGroup.addChild(oBg);
        
        s_oStage.addChild(_oGroup);
    };
    
    this.unload = function(){
        _oGroup.removeChild(oBg);
    };
    
    this.show = function(){
        _oGroup.visible = true;
    };
    
    this._onButExitRelease = function(){
        _oGroup.visible = false;
    };
    
    this._init();
}