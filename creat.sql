create database jnhs;

use jnhs;

set names gbk;

#管理用户表
create table manager
(
	id				int				auto_increment			primary key,
	userName		varchar(100)	not null,
	password		varchar(100)	not null,
	userType		varchar(20)		not null,
	remark			varchar(200)		null,
	addnum			int				default 0
);

insert into manager(userName,password,userType)values('admin','123','系统管理员');

#公司简介表
create table gsjj
(
    jj_Id           int(100)             auto_increment           primary key,
	jj_content	    text		not null
);

insert into gsjj(jj_content)value('中兴通讯是全球领先的综合通信解决方案提供商。公司通过为全球160多个国家和地区的电信运营商和企业网客户提供创新技术与产品解决方案，让全世界用户享有语音、数据、多媒体、无线宽带等全方位沟通。公司成立于1985年，在香港和深圳两地上市，是中国最大的通信设备上市公司。
　　中兴通讯拥有通信业界最完整的、端到端的产品线和融合解决方案，通过全系列的无线、有线、业务、终端产品和专业通信服务，灵活满足全球不同运营商和企业网客户的差异化需求以及快速创新的追求。2014年中兴通讯实现营业收入814.7亿元人民币，净利润26.3亿元人民币，同比增长94%。目前，中兴通讯已全面服务于全球主流运营商及企业网客户，智能终端发货量位居美国前四，并被誉为“智慧城市的标杆企业”。
　　中兴通讯坚持以持续技术创新为客户不断创造价值。公司在美国、法国、瑞典、印度、中国等地共设有20个全球研发机构，近3万名国内外研发人员专注于行业技术创新；PCT专利申请量近5年均居全球前三，2011、2012年PCT蝉联全球前一。公司依托分布于全球的107个分支机构，凭借不断增强的创新能力、突出的灵活定制能力、日趋完善的交付能力赢得全球客户的信任与合作。
　　中兴通讯为联合国全球契约组织成员，坚持在全球范围内贯彻可持续发展理念，实现社会、环境及利益相关者的和谐共生。我们运用通信技术帮助不同地区的人们享有平等的通信自由；我们将“创新、融合、绿色”理念贯穿到整个产品生命周期，以及研发、生产、物流、客户服务等全流程，为实现全球性降低能耗和二氧化碳排放不懈努力。我们还在全球范围内开展社区公益和救助行动，参加了印尼海啸、海地及汶川地震等重大自然灾害救助，并成立了中国规模最大的“关爱儿童专项基金”。
　　未来，中兴通讯将继续致力于引领全球通信产业的发展，应对全球通信领域更趋日新月异的挑战。　
');

#服务项目表
create table fwxm
(
	fw_Id			int 			auto_increment			primary key
	
);

#工程案例表
create table gcal
(
	al_Id			int					auto_increment			primary key,
	al_name		    varchar(100)		not null,
	al_content		text				not null,
	al_area		    varchar(50)			not null,
	al_style		varchar(10)			not null,
	al_author		varchar(100)		null
);

#新闻动态表
create table newsArticles
(
	xw_Id				int				auto_increment			primary key,
	xw_content			text			not null,
	xw_title			varchar(500)	not null,
	xw_userName			varchar(100)	not null,
	xw_writer			varchar(100)		null,
	xw_source			varchar(400)		null,
	xw_hints			int				default 0,
	xw_dateandtime		timestamp		default current_timestamp,
	xw_checkup			int				default 0,
	xw_imagepath		varchar(100)		null
);

#客户留言表
create table message
(
	ly_Id		 int				auto_increment			primary key,
	ly_name		 varchar(100)		not null,
	ly_email	 varchar(100)		not null,
	ly_phone	 varchar(100)		not null,
	ly_body		 varchar(1000)		not null
);

#人才招聘表
create table recruitment
(
	zp_Id			int				auto_increment			primary key,
	zp_position 	varchar(50)		not null,
	zp_experience	varchar(50)		not null,
	zp_schooling	varchar(50)		not null,
	zp_wage			varchar(50)		not null,
	dateandtime		timestamp		default current_timestamp
);

#联系方式表
create table contact
(
	lx_Id			int 			auto_increment			primary key,
	lx_name			varchar(100)   not null,
	lx_phone		varchar(100)	not null,
	lx_email		varchar(100)	not null,
	lx_qq			varchar(100)	not null,
	lx_address		varchar(100)	not null
);

insert into gsjj(jj_content)value('　
');
















