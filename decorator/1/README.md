Паттерн Декоратор
=====================

* Декроаторы имеюи тот же супертип, что идекорируемые объекты
* Объект можно "завернуть" в один или несколько декораторов
* Трк как декоратор относится к тому же супертипу, что и декорируемый объект, то мы можем передать декриррованый объект вместо исходного
* > Декоратор добавляет свое поведение до и (или) после делегирования операци делегируемому объекту, выполняющему остальную работу
* Объект может быть декорирован в любой момент времни, так что мы можем декорировать динамическии и произвольным количеством декораторов