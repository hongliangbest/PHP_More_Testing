### 生成器 yield 关键字

> 优点

    - 生成器会对PHP应用的性能有非常大的影响
    - PHP代码运行时节省大量的内存
    - 比较适合计算大量的数据

[1. 普通实现方式 ](simple.php)

[2. 使用yield并理解](useYield.php)



> 概念理解

    
首先明确一个概念：生成器yield关键字不是返回值，它的专业术语叫**产生值**，只是生成一个值 

那么代码中 foreach 循环的是什么？

其实是PHP在使用生成器的时候，会返回一个 Generator 类的对象。foreach 可以对该对象进行迭代，每一次迭代，PHP会通过 Generator 实例计算出下一次需要迭代的值。

这样 foreach 就知道下一次需要迭代的值了。

而且，在运行 for 循环执行后，会立即停止，等待 foreach 下次循环时候再次和 for 索要下次的值的时候，循环才会再执行一次，然后立即再次停止。

直到不满足条件不执行结束！


> 运用

[3. 使用yield读取大文件](./readLargeFiles.php)

yield生成器是php5.5之后出现的，yield提供了一种更容易的方法来实现简单的迭代现象，相比较定义类实现Iterator接口的方式，性能开销和复杂度大大降低

yield生成器允许你 在foreach 代码块中写代码来迭代一组数据而不需要在内存中创建一个数组

[4. 百万级别的访问量，内存优化](./million.php)


[5. 使用yield数据导出]()











    