
pkgname=tsend
pkgver=7.09bc1fc
pkgrel=1
pkgdesc='simple script to send stdout with telegram bot'
arch=('any')
url='https://github.com/sahakkhotsanyan/tsend'
license=('custom:unknown')
depends=('php' 'curl')
makedepends=('git')
source=('git+https://github.com/sahakkhotsanyan/tsend.git')
sha512sums=('SKIP')
pkgver() {
  cd $pkgname
  echo $(git rev-list --count HEAD).$(git rev-parse --short HEAD)
}
package() {
  cd $pkgname
  install -Dm 755 pkg/colors.php "$pkgdir/usr/share/$pkgname/colors.php"
  install -Dm 755 pkg/indent.php "$pkgdir/usr/share/$pkgname/indent.php"
  install -Dm 755 pkg/bot.php "$pkgdir/usr/share/$pkgname/bot.php"
	install -Dm 755 pkg/tsend "$pkgdir/usr/bin/$pkgname"
	install -Dm 644 LICENSE "$pkgdir/usr/share/licenses/$pkgname/LICENSE"
	
}

