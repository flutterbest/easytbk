<?php
namespace NiuGengYun\EasyTBK\Vip\Osp\Protocol;

abstract class Protocol {
	public abstract function reset();

	public abstract function writeMessageBegin();

	public abstract function writeMessageEnd();

	public abstract function writeStructBegin();

	public abstract function writeStructEnd();

	public abstract function writeFieldBegin($name);

	public abstract function writeFieldEnd();

	public abstract function writeFieldStop();

	public abstract function writeMapBegin();

	public abstract function writeMapEnd();

	public abstract function writeListEnd();

	public abstract function writeSetBegin();

	public abstract function writeSetEnd();

	public abstract function writeBool($b);

	public abstract function writeByte($b);

	public abstract function writeI16($i16);

	public abstract function writeI32($i32);

	public abstract function writeI64($i64);

	public abstract function writeDouble($dub);

	public abstract function writeString($str);

	public abstract function writeBinary($bin);

	public abstract function writeListBegin();

	public abstract function readListBegin();

	public abstract function readListEnd();

	public abstract function readStructBegin();

	public abstract function readStructEnd();

	public abstract function readFieldBegin();

	public abstract function readFieldEnd();

	public abstract function readI32(&$i32);

	public abstract function readDouble(&$dub);

	public abstract function readString(&$str);

	public abstract function getTransport();

	public abstract function setTransport($trans_);

	public abstract function readChar();

	public abstract function readSetBegin();

	public abstract function readSetEnd();

	public abstract function readMapBegin();

	public abstract function readMapEnd();

	public abstract function readByte(&$byte);

	public abstract function readI64(&$i64);

	public abstract function readBool(&$bool);

	public abstract function readI16(&$i16);

	public abstract function getType();
}
