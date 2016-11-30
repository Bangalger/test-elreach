var ZPlat = ZPlat || {};

ZPlat.dim = ZPlat.getGameLandscapeDimensions(700, 350);

ZPlat.game = new Phaser.Game(ZPlat.dim.w, ZPlat.dim.h, Phaser.AUTO);

//Solucion, supuestamente ya es responsive el juego., luego de esto el codigo continua en otras partes del
//del juego, pero mejor sigo con otra cosa 
// saque de acá http://www.emanueleferonato.com/2015/02/26/the-basics-of-responsive-html5-games/

/*ZPlat.game = new Phaser.Game("100%", "100%", Phaser.CANVAS, ""; {
	preload:OnPreload,
	create:OnCreate,
	resize:onResize
});*/ 


ZPlat.game.state.add('Boot', ZPlat.BootState); 
ZPlat.game.state.add('Preload', ZPlat.PreloadState); 
ZPlat.game.state.add('Game', ZPlat.GameState);

ZPlat.game.state.start('Boot'); 
